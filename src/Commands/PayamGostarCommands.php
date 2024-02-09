<?php

namespace Larapress\PayamGostar\Commands;

use Illuminate\Support\Facades\Log;
use Larapress\CRUD\Commands\ActionCommandBase;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

class PayamGostarCommands extends ActionCommandBase
{
    /** @var IPayamGostarService */
    protected $pg;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larapress:pg {--action=} {--id=} {--start-id=} {--end-id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync larapress users with payamgostar';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(IPayamGostarService $pg)
    {
        parent::__construct([
            'sync:user' => $this->syncUserWithId(),
            'sync:users' => $this->syncUsers(),
            'sync:schedule:users' => $this->syncScheduleUsers(),
            'sync:product' => $this->syncProductWithId(),
            'sync:products' => $this->syncProducts(),
            'sync:cart' => $this->syncCartWithId(),
            'sync:user-carts' => $this->syncUserCarts(),
            'gen:classes' => $this->generateWSDLClasses(),
        ]);
        $this->pg = $pg;
    }

    /**
     * 
     */
    public function syncUserWithId()
    {
        return function () {
            $id = $this->option("id");
            if (!is_null($id)) {
                if (is_null($this->pg->syncUser($id))) {
                    $this->error('Error syncing user, see logs');
                } else {
                    $this->info("Done user sync.");
                }
            } else {
                $this->warn("No Id was provided to sync");
            }
        };
    }

    /**
     * 
     */
    public function syncUsers()
    {
        ini_set('max_execution_time', 0);
        
        return function () {
            $startId = $this->option("start-id", null);
            $endId = $this->option('end-id', null);

            $id = $this->option("id");
            if (!is_null($id)) {
                $this->error("sync:users can not be used with --id");
                return;
            }

            $this->pg->syncUsers($startId, $endId, function ($event, $value) {
                if ($event === 'start') {
                    $this->output->progressStart($value);
                } else if ($event === 'update') {
                    $this->output->progressAdvance(1);
                } else {
                    $this->output->progressFinish();
                    $this->info("Errors on ids: ".json_encode($value));
                    Log::debug("Payamgostar Finished mass sync", [
                        'failed_ids' => $value,
                    ]);
                }
            });
            $this->info("Done.");
        };
    }


    /**
     * 
     */
    public function syncScheduleUsers()
    {
        ini_set('max_execution_time', 0);
        
        return function () {
            $startId = $this->option("start-id", null);
            $endId = $this->option('end-id', null);

            $id = $this->option("id");
            if (!is_null($id)) {
                $this->error("sync:users can not be used with --id");
                return;
            }

            $this->pg->scheduleSyncUsers($startId, $endId, function ($event, $value) {
                if ($event === 'start') {
                    $this->output->progressStart($value);
                } else if ($event === 'update') {
                    $this->output->progressAdvance($value);
                } else {
                    $this->output->progressFinish();
                    $this->info("Errors on ids: ".json_encode($value));
                    Log::debug("Payamgostar Finished mass sync", [
                        'failed_ids' => $value,
                    ]);
                }
            });
            $this->info("Done.");
        };
    }

    public function syncUserCarts() {
        return function () {
            $id = $this->option("id");
            if (!is_null($id)) {
                $this->pg->syncUserCarts($id);
                $this->info("Done user sync carts.");
            } else {
                $this->warn("No Id was provided to sync");
            }
        };
    }

    /**
     * 
     */
    public function syncProductWithId()
    {
        return function () {
            $id = $this->option("id");
            if (!is_null($id)) {
                $this->pg->syncProduct($id);
                $this->info("Done product sync.");
            } else {
                $this->warn("No Id was provided to sync");
            }
        };
    }

    /**
     * 
     */
    public function syncCartWithId()
    {
        return function () {
            $id = $this->option("id");
            if (!is_null($id)) {
                $this->pg->syncCart($id);
                $this->info("Done cart sync.");
            } else {
                $this->warn("No Id was provided to sync");
            }
        };
    }

    /**
     * 
     */
    public function syncProducts()
    {
        return function () {
            $startId = $this->option("start-id", null);
            $endId = $this->option('end-id', null);



            $id = $this->option("id");
            if (!is_null($id)) {
                $this->error("sync:products can not be used with --id");
                return;
            }

            $this->pg->syncProducts($startId, $endId, function ($event, $value) {
                if ($event === 'start') {
                    $this->output->progressStart($value);
                } else if ($event === 'update') {
                    $this->output->progressAdvance(1);
                } else {
                    $this->output->progressFinish();
                }
            });
            $this->info("Done.");
        };
    }

    /**
     * 
     */
    public function generateWSDLClasses()
    {
        return function () {
            $wsdlsFolder = config('larapress.payamgostar.proxy.local_wsdl_path').'/Services/Api/';
            $files = [
                'IPerson_1.wsdl' => 'Person',
                'IPriceList_1.wsdl' => 'PriceList',
                'IProduct_1.wsdl' => 'Product',
                'iUser_1.wsdl' => 'User',
                'iappointment_1.wsdl' => 'Appointment',
                'ibusinessnote_1.wsdl' => 'BusinessNote',
                'icontract_1.wsdl' => 'Contract',
                'iepay_1.wsdl' => 'EPay',
                'iform_1.wsdl' => 'Form',
                'IIdentity_1.wsdl' => 'Identity',
                'iinventory_1.wsdl' => 'Inventory',
                'iinvoice_1.wsdl' => 'Invoice',
                'iopportunity_1.wsdl' => 'Opportunity',
                'iorganization_1.wsdl' => 'Organization',
                'ipayment_1.wsdl' => 'Payment',
                'iphonelog_1.wsdl' => 'PhoneLog',
                'itask_1.wsdl' => 'Task',
                'iticket_1.wsdl' => 'Ticket',
            ];

            $filespath = [];
            foreach ($files as $file => $service) {

                // Options definition: the configuration file parameter is optional
                $options = GeneratorOptions::instance(/* '/path/file.yml' */);
                $options
                    ->setOrigin($wsdlsFolder . $file)
                    ->setDestination( storage_path('tmp/wsdl'))
                    ->setStandalone(false)
                    ->setNamespace('Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\'.$service)
                    ;
                // Generator instantiation
                $generator = new Generator($options);
                // Package generation
                $generator->generatePackage();

                // $generator = new Generator();
                // $generator->generate(
                //     new Config([
                //         'inputFile' =>  $wsdlsFolder . $file,
                //         'outputDir' => storage_path('tmp/wsdl'),
                //         'namespaceName' => 'Larapress\\PayamGostar\\Services\\PayamGostar\\PGSoap'
                //     ])
                // );
            }
        };
    }
}
