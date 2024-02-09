<?php

namespace Larapress\PayamGostar\Services\PayamGostar;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Larapress\CRUD\Exceptions\AppException;
use Larapress\CRUD\Repository\RoleRepository;
use Larapress\ECommerce\Models\Cart;
use Larapress\ECommerce\Models\Product;
use Larapress\ECommerce\Models\ProductCategory;
use Larapress\ECommerce\Services\SupportGroup\SupportGroupBatchUpdatedEvent;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfCategoryInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfIdentityContactPhone;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ServiceType\Save as SavePersonApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ServiceType\Search as SearchPersonApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\BaseCrmObjectExtendedPropertyInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\CategoryInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SavePerson;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPerson;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ServiceType\Find as FindProductApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ServiceType\Save as SaveProductApi;

use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType\Approved as ApprovedApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType\Search as SearchInvoiceApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType\Save as SaveInvoiceApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Approved;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveInvoice;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchInvoice;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfIdentityContactAddress;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfstring;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByCode;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductGroupById;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo;
use Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProduct;
use Larapress\PayamGostar\Services\PayamGostar\Soap\User\ServiceType\Get as GetUserApi;
use Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByIdentityId;
use Larapress\Profiles\IProfileUser;
use Larapress\Profiles\Models\Filter;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class PayamGostarService implements IPayamGostarService
{
    /** @var array */
    protected $soapClientOptions;
    /** @var string */
    protected $soapClientWSDL;
    protected $roleRepo;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepo = $roleRepository;
        if (!is_null(config('larapress.payamgostar.socket_timeout'))) {
            ini_set("default_socket_timeout", config('larapress.payamgostar.socket_timeout'));
        }
        $this->soapClientWSDL = config('larapress.payamgostar.base_url');
        $this->soapClientOptions = [
            AbstractSoapClientBase::WSDL_TRACE => 1,
            AbstractSoapClientBase::WSDL_ENCODING => 'UTF-8',
            AbstractSoapClientBase::WSDL_URL => config('larapress.payamgostar.use_local_wsdl') ? 
                config('larapress.payamgostar.proxy.local_wsdl_path') : config('larapress.payamgostar.base_url')
        ];
        if (config('larapress.payamgostar.proxy.enabled')) {
            $this->soapClientOptions = array_merge($this->soapClientOptions, [
                AbstractSoapClientBase::WSDL_PROXY_HOST => config('larapress.payamgostar.proxy.host'),
                AbstractSoapClientBase::WSDL_PROXY_PORT => config('larapress.payamgostar.proxy.port'),
                AbstractSoapClientBase::WSDL_URL => config('larapress.payamgostar.proxy.local_wsdl_path'),
            ]);
        }
        if (config('larapress.payamgostar.use_local_wsdl')) {
            $this->soapClientWSDL = config('larapress.payamgostar.proxy.local_wsdl_path');
        }
    }

    /**
     * @param IProfileUser|int $user
     */
    public function syncUser($user)
    {
        if (is_numeric($user)) {
            $user = User::find($user);
        }

        $role = $this->roleRepo->getUserHighestRole($user);
        $roleDetails = config('larapress.payamgostar.sync.roles.default');
        // update roleDetails if we have custom options for this role
        if (!is_null($role) && in_array($role->name, array_keys(config('larapress.payamgostar.sync.roles')))) {
            $roleDetails = config('larapress.payamgostar.sync.roles')[$role->name];
        }

        // use referenced role when 'same' option is used
        if (isset($roleDetails['same'])) {
            $roleDetails = config('larapress.payamgostar.sync.roles')[$roleDetails['same']];
        }

        // ignore this users sync if ignore options is used on its role
        if ($roleDetails['ignore'] ?? false == true) {
            return null;
        }

        $extendedProps = [];
        $person = $this->findPersonWithId($user->id);
        if (is_null($person)) {
            $person = new PersonInfo();
        }

        // set role attrs
        $person->setCrmObjectTypeCode($roleDetails['type_code']);
        $person->setCrmObjectTypeId($roleDetails['type_id']);
        $person->setCrmObjectTypeIndex($roleDetails['type_index']);
        $person->setIdentityType($roleDetails['identity_type']);
        $person->setDontEmail($roleDetails['dont_contact'] ?? false);
        $person->setDontPhoneCall($roleDetails['dont_contact'] ?? false);
        $person->setDontSms($roleDetails['dont_contact'] ?? false);
        $person->setDontSocialSms($roleDetails['dont_contact'] ?? false);
        $person->setDontFax($roleDetails['dont_contact'] ?? false);

        // set profile attrs
        $profile_form = $user->getProfileAttribute();
        if (!is_null($profile_form)) {
            if (isset($profile_form->data['values']['firstname'])) {
                $person->setFirstName($profile_form->data['values']['firstname']);
            }
            if (isset($profile_form->data['values']['lastname'])) {
                $person->setLastName($profile_form->data['values']['lastname']);
            }
            if (isset($profile_form->data['values']['melli_code'])) {
                $person->setNationalCode($profile_form->data['values']['melli_code']);
            }
            if (isset($profile_form->data['values']['year']) && is_numeric($profile_form->data['values']['year'])) {
                $year = Filter::find($profile_form->data['values']['year']);
                if (!is_null($year)) {
                    $person->setDegree($year->data['title']);
                    $extendedProps[] = $this->createExtendedProp('m83', $year->data['title']);
                }
            }
            if (isset($profile_form->data['values']['field']) && is_numeric($profile_form->data['values']['field'])) {
                $field = Filter::find($profile_form->data['values']['field']);
                if (!is_null($field)) {
                    $person->setAreasOfInterest($field->data['title']);
                    $extendedProps[] = $this->createExtendedProp('m84', $field->data['title']);
                }
            }

            $alreadyExistsEmail = $person->getEmails();
            if ((is_null($alreadyExistsEmail) || $alreadyExistsEmail->count() <= 0) && isset($profile_form->data['values']['email'])) {
                $person->setEmails(new ArrayOfstring([$profile_form->data['values']['email']]));
            } else {
                $person->setEmails(null);
            }

            $alreadyExistsAddress = $person->getAddressContacts();
            if (
                isset($profile_form->data['values']['postalcode']) &&
                isset($profile_form->data['values']['address'])
            ) {
                if (is_null($alreadyExistsAddress) || $alreadyExistsAddress->count() <= 0) {
                    $person->setAddressContacts(new ArrayOfIdentityContactAddress([
                        new IdentityContactAddress(
                            $profile_form->data['values']['address'],
                            config('larapress.payamgostar.sync.address_type'),
                            null,
                            null,
                            null,
                            null,
                            null,
                            $profile_form->data['values']['postalcode'],
                        )
                    ]));
                } else {
                    $pgAddressRef = $alreadyExistsAddress->first();
                    $pgAddressRef->setAddress($profile_form->data['values']['address']);
                    $pgAddressRef->setZipCode($profile_form->data['values']['postalcode']);
                    $person->setAddressContacts(new ArrayOfIdentityContactAddress([$pgAddressRef]));
                }
            } else {
                $person->setAddressContacts(null);
            }
        } else {
            $person->setFirstName('پروفایل');
            $person->setLastName('تکمیل نشد');
            $person->setAddressContacts(null);
            $person->setEmails(null);
        }

        $campaign_entry = $user->form_entries()->whereIn('form_id', config('larapress.ecommerce.lms.campaign_form_ids'))->first();
        if (!is_null($campaign_entry)) {
            $extendedProps[] = $this->createExtendedProp('m111', $campaign_entry->form_id.' > '.$campaign_entry->link_tag);
        }

        // set pg user categories
        $catIds = $roleDetails['category_ids'] ?? [];
        $categories = [];
        foreach ($catIds as $catId) {
            if (!is_null($catId) && !empty($catId)) {
                $cat = new CategoryInfo();
                $cat->setId($catId);
                $categories[] = $cat;
            }
        }
        $person->setCategories(new ArrayOfCategoryInfo($categories));

        $balance = $user->getBalanceAttribute();
        if (!is_null($balance) && isset($balance['amount'])) {
            $person->setBalance(floatval($balance['amount']));
        } else {
            $person->setBalance(0);
        }

        // set user base referencing data
        $person->setCreatDate($user->created_at->format(config('larapress.payamgostar.datetime_format')));
        $person->setModifyDate($user->updated_at->format(config('larapress.payamgostar.datetime_format')));
        $person->setRefId("press-" . $user->id);
        $person->setWebsite($user->id);

        // set user phones
        $alreadyExistsPhones = $person->getPhoneContacts();
        $phones = $user->phones;
        if (!is_null($phones) && count($phones) > 0) {
            if (is_null($alreadyExistsPhones) || $alreadyExistsPhones->count() <= 0) {
                $phoneIdentities = [];
                /** @var PhoneNumber $phone */
                $phones->each(function ($phone, $index) use (&$phoneIdentities) {
                    $p = new IdentityContactPhone();
                    $p->setPhoneNumber($phone->number);
                    $p->setIsDefault($index === 0);
                    $p->setPhoneType(config('larapress.payamgostar.sync.phone_type'));
                    $phoneIdentities[] = $p;
                });
                $person->setPhoneContacts(new ArrayOfIdentityContactPhone($phoneIdentities));
            } else {
                $existingPhones = $alreadyExistsPhones->getIdentityContactPhone();
                foreach ($existingPhones as $existingCrmPhone) {
                    $existingCrmPhone->setPhoneType(config('larapress.payamgostar.sync.phone_type'));
                }
                $person->setPhoneContacts(new ArrayOfIdentityContactPhone($existingPhones));
            }
        } else {
            $person->setPhoneContacts(null);
        }
        if ($phones->count() > 0) {
            $person->setCustomerNumber($phones[0]->number);
        }

        // // set support user data
        if (!is_null($user->getSupportUserId())) {
            $suppPerson = $this->findSupportWithId($user->getSupportUserId());
            if (!is_null($suppPerson)) {
                $suppUserAccount = $this->getUserAccountWithPGId($suppPerson->getCrmId());
                if (!is_null($suppUserAccount)) {
                    $person->setSupportUsername($suppUserAccount->getUsername());
                } else {
                    $person->setSupportUsername(null);
                }
            } else {
                $person->setSupportUsername(null);
            }

            $supportProfile = $user->getSupportUserProfileAttribute();
            if (!is_null($supportProfile)) {
                $suppFirstname = $supportProfile->data['values']['firstname'];
                $suppLastname = $supportProfile->data['values']['lastname'];

                $extendedProps[] = $this->createExtendedProp('m80', $suppFirstname . ' ' . $suppLastname);
                $extendedProps[] = $this->createExtendedProp('m81', $user->getSupportUserId());
            }
        }

        // use extended id prop
        $extendedProps[] = $this->createExtendedProp('m1', $user->id);
        $person->setExtendedProperties(new ArrayOfBaseCrmObjectExtendedPropertyInfo($extendedProps));

        $person->setTags(null);
        $person->setEmployees(null);

        // exec request
        $personApi = new SavePersonApi($this->soapClientOptions);
        $result = $personApi->SavePerson(new SavePerson(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            $person
        ));
        if (!$result) {
            Log::error("Error saving person in PG", [
                'error' => $personApi->getLastError(),
            ]);
            return null;
        } else {
            $result = $result->getSavePersonResult();
            if (!$result->getSuccess()) {
                Log::error("Could not sync user $user->id with payamgostar", [
                    'error' => $result->getMessage(),
                    'data' => $person,
                ]);
                return null;
            } else {
                PgSyncRecord::updateOrCreate([
                    'link_id' => $user->id,
                    'link_type' => PgSyncRecord::LinkType_UserSync,
                ], [
                    'data' => [
                        'crmId' => $result->getCrmId(),
                    ]
                ]);
            }
        }

        return $result;
    }

    /**
     * @param bool|string $from
     */
    public function syncUsers($startIndex, $endIndex, $callback = null)
    {
        $query = User::query();

        if (!is_null($startIndex)) {
            $query->where('id', '>=', $startIndex);
        }
        if (!is_null($endIndex)) {
            $query->where('id', '<=', $endIndex);
        }

        $callback('start', $query->count());
        $errors = [];
        $query->chunk(config('larapress.payamgostar.sync.chunk_size'), function ($chunk) use ($callback, &$errors) {
            foreach ($chunk as $prod) {
                try {
                    if (is_null($this->syncUser($prod))) {
                        $errors[] = $prod->id;
                    }
                } catch (Exception $e) {
                    $errors[] = $prod->id;
                }
                if (!is_null($callback)) {
                    $callback('update', $prod);
                }
            }
        });
        $callback('end', $errors);
    }

    /**
     * @param bool|string $from
     */
    public function scheduleSyncUsers($startIndex, $endIndex, $callback = null)
    {
        $query = User::query();

        if (!is_null($startIndex)) {
            $query->where('id', '>=', $startIndex);
        }
        if (!is_null($endIndex)) {
            $query->where('id', '<=', $endIndex);
        }

        $callback('start', $query->count());
        $errors = [];
        $query->chunk(config('larapress.payamgostar.sync.chunk_size'), function ($chunk) use ($callback, &$errors) {
           SupportGroupBatchUpdatedEvent::dispatch($chunk->pluck('id'));
           $callback('update', $chunk->count());
        });
        $callback('end', $errors);
    }


    /**
     * 
     */
    public function syncUserCarts($user)
    {
        if (is_numeric($user)) {
            $user = User::find($user);
        }

        $carts = $user->paid_carts()->with(['products'])->get();
        $personCrmId = $this->getPersonCrmIdFromUser($user);

        foreach ($carts as $cart) {
            $this->syncCart($cart, $personCrmId);
        }
    }

    /**
     * 
     * @param int|Product $prod
     */
    public function syncProduct($prod)
    {
        if (is_numeric($prod)) {
            $prod = Product::with(['types'])->find($prod);
        }

        $pts = $prod->types->pluck('id')->toArray();
        $ats = config('larapress.payamgostar.sync.allowed_product_types');
        if (count(array_intersect_assoc($pts, $ats)) == 0) {
            throw new Exception("We are not allowed to sync product with this types, id=", $prod->id);
        }

        $p = $this->findProductWithId($prod->id);
        if (is_null($p)) {
            $p = new ProductInfo();
        }

        $p->setCode("press-" . $prod->id);
        $p->setBuyAble(true);
        $p->setIsService(true);
        $p->setName($prod->data['title']);
        $p->setUnitPrice($prod->price());
        $p->setGroupId(config('larapress.payamgostar.sync.root_product_group'));

        $productApi = new SaveProductApi($this->soapClientOptions);
        $reqSave = new SaveProduct(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            $p
        );
        $result = $productApi->SaveProduct($reqSave);

        if (!$result) {
            Log::error("Error saving product in PG", [$productApi->getLastError()]);
        } else {
            $result = $result->getSaveProductResult();
            if (!$result->getSuccess()) {
                Log::error("Could not sync product $prod->id with payam gostar", [$result->getMessage()]);
            } else {
                PgSyncRecord::updateOrCreate([
                    'link_id' => $prod->id,
                    'link_type' => PgSyncRecord::LinkType_ProductSync
                ], [
                    'data' => [
                        'crmId' => $result->getCrmId(),
                    ]
                ]);
            }
        }

        return $result;
    }

    /**
     * 
     * @param string|bool $from products with updated_at after this date will be synced
     */
    public function syncProducts($fromIndex, $endIndex, $callback = null)
    {
        $query = Product::query()
            ->whereHas('types', function ($q) {
                $q->whereIn('id', config('larapress.payamgostar.sync.allowed_product_types'));
            });

        if (!is_null($fromIndex)) {
            $query->where('id', '>=', $fromIndex);
        }
        if (!is_null($endIndex)) {
            $query->where('id', '<=', $endIndex);
        }

        $callback('start', $query->count());
        $query->chunk(config('larapress.payamgostar.sync.chunk_size'), function ($chunk) use ($callback) {
            foreach ($chunk as $prod) {
                $this->syncProduct($prod);
                if (!is_null($callback)) {
                    $callback('update', $prod);
                }
            }
        });
        $callback('end', null);
    }

    /**
     * 
     */
    public function syncProductCategory($cat)
    {
        if (is_numeric($cat)) {
            $cat = ProductCategory::find($cat);
        }
    }

    /**
     * @param Cart $cart
     * @param string $personCrmId
     * 
     * @return mixed
     */
    public function syncCartAsInvoice($cart, $personCrmId)
    {
        $invoiceApi = new SaveInvoiceApi($this->soapClientOptions);

        $details = [];
        /** @var Collection */
        $cartProducts = $cart->products;
        $prodSyncInfos = PgSyncRecord::where('link_type', PgSyncRecord::LinkType_ProductSync)
            ->whereIn('link_id', $cartProducts->pluck('id')->toArray())
            ->get()
            ->keyBy('link_id');

        foreach ($cartProducts as $prod) {
            if ($prodSyncInfos->has($prod->id)) {
                $prodCrmId = $prodSyncInfos->get($prod->id)->data['crmId'];
            } else {
                $prodCrm = $this->syncProduct($prod);
                if (!is_null($prodCrm)) {
                    $prodCrmId = $prodCrm->getCrmId();
                }
            }

            $price = max(10, $prod->price());
            $dt = new InvoiceDetailInfo(
                $price,
                1,
            );
            $dt->setTotalUnitPrice($price);
            $dt->setProductCode("press-" . $prod->id);
            $dt->setProductId($prodCrmId);
            $dt->setIsService(true);
            $details[] = $dt;
        }

        $purchase_date = null;
        if (isset($cart->data['period_start'])) {
            $purchase_date = Carbon::parse($cart->data['period_start']);
        }
        $invoice = new InvoiceInfo();
        $invoice->setCreatDate($cart->created_at->format(config('larapress.payamgostar.datetime_format')));
        $invoice->setModifyDate($cart->updated_at->format(config('larapress.payamgostar.datetime_format')));
        $invoice->setInvoiceDate($purchase_date?->format(config('larapress.payamgostar.datetime_format')) ?? null);
        $invoice->setIdentityId($personCrmId);
        $invoice->setRefId("press-" . $cart->id);
        $invoice->setInvoiceType(config('larapress.payamgostar.sync.invoice_type'));
        $invoice->setCrmObjectTypeCode(config('larapress.payamgostar.sync.invoice_type_code'));
        $invoice->setCrmObjectTypeId(config('larapress.payamgostar.sync.invoice_type_id'));
        $invoice->setCrmObjectTypeIndex(config('larapress.payamgostar.sync.invoice_type_index'));
        $invoice->setFinalValue($cart->amount);
        $invoice->setTotalValue($cart->amount);
        $invoice->setNumber($cart->id);
        if ($cart->hasGiftCodeUsage()) {
            $giftCodeDetails = $cart->getGiftCodeUseDetails();
            $invoice->setDiscount($giftCodeDetails['amount'] ?? 0);
            $invoice->setDiscountPercent(floatval($giftCodeDetails['percent'] ?? 0));
        } else {
            $invoice->setDiscount(0);
            $invoice->setDiscountPercent(0);
        }
        $invoice->setAdditionalCosts(0);
        $invoice->setVat($cart->getExtraFeeAmount());
        $invoice->setVatPercent($cart->getExtraFeePercent());

        $cartSyncInfo = PgSyncRecord::where('link_id', $cart->id)->where('link_type', PgSyncRecord::LinkType_CartSync)->first();
        if (isset($cartSyncInfo->data['crmId']) && $cartSyncInfo->data['crmId'] !== "00000000-0000-0000-0000-000000000000") {
            $invoice->setCrmId($cartSyncInfo->data['crmId']);
        }

        $invoice->setDetails(new ArrayOfInvoiceDetailInfo($details));
        $saveInvoiceReq = new SaveInvoice(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            $invoice
        );
        $result = $invoiceApi->SaveInvoice($saveInvoiceReq);
        if (!$result) {
            Log::error("Could not sync cart $cart->id with payam gostar", $invoiceApi->getLastError());
        } else {
            $result = $result->getSaveInvoiceResult();
            if (!$result->getSuccess()) {
                Log::error("Could not sync cart $cart->id with payam gostar", [$result->getMessage()]);
            } else {
                PgSyncRecord::updateOrCreate([
                    'link_id' => $cart->id,
                    'link_type' => PgSyncRecord::LinkType_CartSync,
                ], [
                    'data' => [
                        'crmId' => $result->getCrmId(),
                    ]
                ]);
                $approved = false;
                if ($cart->status === Cart::STATUS_ACCESS_COMPLETE || $cart->status === Cart::STATUS_ACCESS_GRANTED) {
                    $approved = $this->approveInvoiceById($result->getCrmId());
                }
                return [$result, $approved];
            }
        }

        return $result;
    }

    /**
     * 
     */
    public function syncCart($cart, $personCrmId = null)
    {
        if (is_numeric($cart)) {
            $cart = Cart::find($cart);
        }
        if (is_null($personCrmId)) {
            $personCrmId = $this->getPersonCrmIdFromUser($cart->customer);
        }

        return $this->syncCartAsInvoice($cart, $personCrmId);
    }

    /**
     * 
     */
    public function findInvoiceWithId($cartId)
    {
        $invoiceApi = new SearchInvoiceApi($this->soapClientOptions);
        $searchReq = new SearchInvoice(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            '',
            'RefId == "press-' . $cartId . '"',
        );
        $result = $invoiceApi->SearchInvoice($searchReq);
        if (!$result) {
            return null;
        }
        $result = $result->getSearchInvoiceResult();
        if (!is_null($result) && !is_null($result->getInvoiceInfoList()) && $result->getInvoiceInfoList()->count() > 0) {
            return $result->getInvoiceInfoList()->first();
        }

        return null;
    }

    public function approveInvoiceById($invoiceId)
    {
        $invoiceApi = new ApprovedApi($this->soapClientOptions);
        $approveReq = new Approved(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            $invoiceId
        );
        $result = $invoiceApi->Approved($approveReq);
        if (!$result) {
            return null;
        }
        $result->getApprovedResult();
    }

    /**
     * 
     */
    public function findProductWithId($id)
    {
        $productApi = new FindProductApi($this->soapClientOptions);
        $findRreq = new FindProductByCode(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            "press-" . $id,
            ''
        );
        $result = $productApi->FindProductByCode($findRreq);
        if (!$result) {
            return null;
        }
        $result = $result->getFindProductByCodeResult();
        if (!is_null($result) && !is_null($result->getProductInfoList()) && $result->getProductInfoList()->count() > 0) {
            return $result->getProductInfoList()->first();
        }

        return null;
    }

    /**
     * 
     * @return PersonInfo|null
     */
    public function findPersonWithId($id)
    {
        return $this->searchPersonWithQuery('RefId == "press-' . $id . '"');
    }

    /**
     * 
     * @return PersonInfo|null
     */
    public function findSupportWithId($id)
    {
        return $this->searchPersonWithQuery('Website == "' . $id . '"');
    }

    /**
     * 
     * @return PersonInfo|null
     */
    public function searchPersonWithQuery($query)
    {
        $personApi = new SearchPersonApi($this->soapClientOptions);
        $searchReq = new SearchPerson(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            null,
            $query
        );
        $result = $personApi->SearchPerson($searchReq);
        if (!$result) {
            return null;
        }
        $result = $result->getSearchPersonResult();

        if (!is_null($result) && !is_null($result->getPersonInfoList()) && $result->getPersonInfoList()->count() > 0) {
            return $result->getPersonInfoList()->first();
        }

        return null;
    }

    /**
     * 
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    protected function getUserAccountWithPGId($pgid)
    {
        $userApi = new GetUserApi($this->soapClientOptions);
        $userReq = new GetUserByIdentityId(
            config('larapress.payamgostar.username'),
            config('larapress.payamgostar.password'),
            $pgid,
        );
        $result = $userApi->GetUserByIdentityId($userReq);
        if (!$result) {
            return null;
        }
        return $result->getGetUserByIdentityIdResult();
    }

    /**
     * Undocumented function
     *
     * @param [type] $prop
     * @param [type] $value
     * @return void
     */
    protected function createExtendedProp($prop, $value)
    {
        $extendedProps = new BaseCrmObjectExtendedPropertyInfo();
        $extendedProps->setUserKey($prop);
        $extendedProps->setValue($value);
        return $extendedProps;
    }

    protected function getPersonCrmIdFromUser($user) {
        $syncInfo = PgSyncRecord::where('link_id', $user->id)->where('link_type', PgSyncRecord::LinkType_UserSync)->first();
        $personCrmId = null;
        if (!isset($syncInfo->data['crmId'])) {
            $result = $this->syncUser($user);

            if (!is_null($result)) {
                $personCrmId = $result->getCrmId();
            } else {
                Log::error("Could not sync user payments, error in syncing user self.", [
                    'user_id' => $user->id,
                ]);
                throw new AppException(AppException::ERR_NO_RESPONSE_FOR_QUERY);
            }
        } else {
            $personCrmId = $syncInfo->data['crmId'];
        }

        return $personCrmId;
    }
}
