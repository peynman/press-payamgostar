<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentityInfo
 * @subpackage Structs
 */
class IdentityInfo extends BaseCrmObjectInfo
{
    /**
     * The AddressContacts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress $AddressContacts = null;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Balance = null;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo $Categories = null;
    /**
     * The Classification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Classification = null;
    /**
     * The ColorName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ColorName = null;
    /**
     * The CustomerDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerDate = null;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerNumber = null;
    /**
     * The DontEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $DontEmail = null;
    /**
     * The DontFax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $DontFax = null;
    /**
     * The DontPhoneCall
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $DontPhoneCall = null;
    /**
     * The DontSms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $DontSms = null;
    /**
     * The DontSocialSms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $DontSocialSms = null;
    /**
     * The Emails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring $Emails = null;
    /**
     * The IdentityType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IdentityType = null;
    /**
     * The NickName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NickName = null;
    /**
     * The OtherUsername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OtherUsername = null;
    /**
     * The PhoneContacts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone $PhoneContacts = null;
    /**
     * The SaleUsername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SaleUsername = null;
    /**
     * The SourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SourceType = null;
    /**
     * The SupportUsername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SupportUsername = null;
    /**
     * The Website
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Website = null;
    /**
     * Constructor method for IdentityInfo
     * @uses IdentityInfo::setAddressContacts()
     * @uses IdentityInfo::setBalance()
     * @uses IdentityInfo::setCategories()
     * @uses IdentityInfo::setClassification()
     * @uses IdentityInfo::setColorName()
     * @uses IdentityInfo::setCustomerDate()
     * @uses IdentityInfo::setCustomerNumber()
     * @uses IdentityInfo::setDontEmail()
     * @uses IdentityInfo::setDontFax()
     * @uses IdentityInfo::setDontPhoneCall()
     * @uses IdentityInfo::setDontSms()
     * @uses IdentityInfo::setDontSocialSms()
     * @uses IdentityInfo::setEmails()
     * @uses IdentityInfo::setIdentityType()
     * @uses IdentityInfo::setNickName()
     * @uses IdentityInfo::setOtherUsername()
     * @uses IdentityInfo::setPhoneContacts()
     * @uses IdentityInfo::setSaleUsername()
     * @uses IdentityInfo::setSourceType()
     * @uses IdentityInfo::setSupportUsername()
     * @uses IdentityInfo::setWebsite()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress $addressContacts
     * @param float $balance
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo $categories
     * @param string $classification
     * @param string $colorName
     * @param string $customerDate
     * @param string $customerNumber
     * @param bool $dontEmail
     * @param bool $dontFax
     * @param bool $dontPhoneCall
     * @param bool $dontSms
     * @param bool $dontSocialSms
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring $emails
     * @param string $identityType
     * @param string $nickName
     * @param string $otherUsername
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone $phoneContacts
     * @param string $saleUsername
     * @param string $sourceType
     * @param string $supportUsername
     * @param string $website
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress $addressContacts = null, ?float $balance = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo $categories = null, ?string $classification = null, ?string $colorName = null, ?string $customerDate = null, ?string $customerNumber = null, ?bool $dontEmail = null, ?bool $dontFax = null, ?bool $dontPhoneCall = null, ?bool $dontSms = null, ?bool $dontSocialSms = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring $emails = null, ?string $identityType = null, ?string $nickName = null, ?string $otherUsername = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone $phoneContacts = null, ?string $saleUsername = null, ?string $sourceType = null, ?string $supportUsername = null, ?string $website = null)
    {
        $this
            ->setAddressContacts($addressContacts)
            ->setBalance($balance)
            ->setCategories($categories)
            ->setClassification($classification)
            ->setColorName($colorName)
            ->setCustomerDate($customerDate)
            ->setCustomerNumber($customerNumber)
            ->setDontEmail($dontEmail)
            ->setDontFax($dontFax)
            ->setDontPhoneCall($dontPhoneCall)
            ->setDontSms($dontSms)
            ->setDontSocialSms($dontSocialSms)
            ->setEmails($emails)
            ->setIdentityType($identityType)
            ->setNickName($nickName)
            ->setOtherUsername($otherUsername)
            ->setPhoneContacts($phoneContacts)
            ->setSaleUsername($saleUsername)
            ->setSourceType($sourceType)
            ->setSupportUsername($supportUsername)
            ->setWebsite($website);
    }
    /**
     * Get AddressContacts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress|null
     */
    public function getAddressContacts(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress
    {
        return $this->AddressContacts ?? null;
    }
    /**
     * Set AddressContacts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress $addressContacts
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setAddressContacts(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactAddress $addressContacts = null): self
    {
        if (is_null($addressContacts) || (is_array($addressContacts) && empty($addressContacts))) {
            unset($this->AddressContacts);
        } else {
            $this->AddressContacts = $addressContacts;
        }
        
        return $this;
    }
    /**
     * Get Balance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->Balance ?? null;
    }
    /**
     * Set Balance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $balance
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        if (is_null($balance) || (is_array($balance) && empty($balance))) {
            unset($this->Balance);
        } else {
            $this->Balance = $balance;
        }
        
        return $this;
    }
    /**
     * Get Categories value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo|null
     */
    public function getCategories(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo
    {
        return $this->Categories ?? null;
    }
    /**
     * Set Categories value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo $categories
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setCategories(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo $categories = null): self
    {
        if (is_null($categories) || (is_array($categories) && empty($categories))) {
            unset($this->Categories);
        } else {
            $this->Categories = $categories;
        }
        
        return $this;
    }
    /**
     * Get Classification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClassification(): ?string
    {
        return $this->Classification ?? null;
    }
    /**
     * Set Classification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $classification
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setClassification(?string $classification = null): self
    {
        // validation for constraint: string
        if (!is_null($classification) && !is_string($classification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classification, true), gettype($classification)), __LINE__);
        }
        if (is_null($classification) || (is_array($classification) && empty($classification))) {
            unset($this->Classification);
        } else {
            $this->Classification = $classification;
        }
        
        return $this;
    }
    /**
     * Get ColorName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColorName(): ?string
    {
        return $this->ColorName ?? null;
    }
    /**
     * Set ColorName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $colorName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setColorName(?string $colorName = null): self
    {
        // validation for constraint: string
        if (!is_null($colorName) && !is_string($colorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorName, true), gettype($colorName)), __LINE__);
        }
        if (is_null($colorName) || (is_array($colorName) && empty($colorName))) {
            unset($this->ColorName);
        } else {
            $this->ColorName = $colorName;
        }
        
        return $this;
    }
    /**
     * Get CustomerDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerDate(): ?string
    {
        return $this->CustomerDate ?? null;
    }
    /**
     * Set CustomerDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setCustomerDate(?string $customerDate = null): self
    {
        // validation for constraint: string
        if (!is_null($customerDate) && !is_string($customerDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerDate, true), gettype($customerDate)), __LINE__);
        }
        if (is_null($customerDate) || (is_array($customerDate) && empty($customerDate))) {
            unset($this->CustomerDate);
        } else {
            $this->CustomerDate = $customerDate;
        }
        
        return $this;
    }
    /**
     * Get CustomerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->CustomerNumber ?? null;
    }
    /**
     * Set CustomerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        if (is_null($customerNumber) || (is_array($customerNumber) && empty($customerNumber))) {
            unset($this->CustomerNumber);
        } else {
            $this->CustomerNumber = $customerNumber;
        }
        
        return $this;
    }
    /**
     * Get DontEmail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDontEmail(): ?bool
    {
        return $this->DontEmail ?? null;
    }
    /**
     * Set DontEmail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $dontEmail
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setDontEmail(?bool $dontEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dontEmail) && !is_bool($dontEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontEmail, true), gettype($dontEmail)), __LINE__);
        }
        if (is_null($dontEmail) || (is_array($dontEmail) && empty($dontEmail))) {
            unset($this->DontEmail);
        } else {
            $this->DontEmail = $dontEmail;
        }
        
        return $this;
    }
    /**
     * Get DontFax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDontFax(): ?bool
    {
        return $this->DontFax ?? null;
    }
    /**
     * Set DontFax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $dontFax
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setDontFax(?bool $dontFax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dontFax) && !is_bool($dontFax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontFax, true), gettype($dontFax)), __LINE__);
        }
        if (is_null($dontFax) || (is_array($dontFax) && empty($dontFax))) {
            unset($this->DontFax);
        } else {
            $this->DontFax = $dontFax;
        }
        
        return $this;
    }
    /**
     * Get DontPhoneCall value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDontPhoneCall(): ?bool
    {
        return $this->DontPhoneCall ?? null;
    }
    /**
     * Set DontPhoneCall value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $dontPhoneCall
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setDontPhoneCall(?bool $dontPhoneCall = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dontPhoneCall) && !is_bool($dontPhoneCall)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontPhoneCall, true), gettype($dontPhoneCall)), __LINE__);
        }
        if (is_null($dontPhoneCall) || (is_array($dontPhoneCall) && empty($dontPhoneCall))) {
            unset($this->DontPhoneCall);
        } else {
            $this->DontPhoneCall = $dontPhoneCall;
        }
        
        return $this;
    }
    /**
     * Get DontSms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDontSms(): ?bool
    {
        return $this->DontSms ?? null;
    }
    /**
     * Set DontSms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $dontSms
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setDontSms(?bool $dontSms = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dontSms) && !is_bool($dontSms)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontSms, true), gettype($dontSms)), __LINE__);
        }
        if (is_null($dontSms) || (is_array($dontSms) && empty($dontSms))) {
            unset($this->DontSms);
        } else {
            $this->DontSms = $dontSms;
        }
        
        return $this;
    }
    /**
     * Get DontSocialSms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDontSocialSms(): ?bool
    {
        return $this->DontSocialSms ?? null;
    }
    /**
     * Set DontSocialSms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $dontSocialSms
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setDontSocialSms(?bool $dontSocialSms = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dontSocialSms) && !is_bool($dontSocialSms)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontSocialSms, true), gettype($dontSocialSms)), __LINE__);
        }
        if (is_null($dontSocialSms) || (is_array($dontSocialSms) && empty($dontSocialSms))) {
            unset($this->DontSocialSms);
        } else {
            $this->DontSocialSms = $dontSocialSms;
        }
        
        return $this;
    }
    /**
     * Get Emails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring|null
     */
    public function getEmails(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring
    {
        return $this->Emails ?? null;
    }
    /**
     * Set Emails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring $emails
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setEmails(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfstring $emails = null): self
    {
        if (is_null($emails) || (is_array($emails) && empty($emails))) {
            unset($this->Emails);
        } else {
            $this->Emails = $emails;
        }
        
        return $this;
    }
    /**
     * Get IdentityType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentityType(): ?string
    {
        return $this->IdentityType ?? null;
    }
    /**
     * Set IdentityType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identityType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setIdentityType(?string $identityType = null): self
    {
        // validation for constraint: string
        if (!is_null($identityType) && !is_string($identityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityType, true), gettype($identityType)), __LINE__);
        }
        if (is_null($identityType) || (is_array($identityType) && empty($identityType))) {
            unset($this->IdentityType);
        } else {
            $this->IdentityType = $identityType;
        }
        
        return $this;
    }
    /**
     * Get NickName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNickName(): ?string
    {
        return $this->NickName ?? null;
    }
    /**
     * Set NickName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nickName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setNickName(?string $nickName = null): self
    {
        // validation for constraint: string
        if (!is_null($nickName) && !is_string($nickName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nickName, true), gettype($nickName)), __LINE__);
        }
        if (is_null($nickName) || (is_array($nickName) && empty($nickName))) {
            unset($this->NickName);
        } else {
            $this->NickName = $nickName;
        }
        
        return $this;
    }
    /**
     * Get OtherUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherUsername(): ?string
    {
        return $this->OtherUsername ?? null;
    }
    /**
     * Set OtherUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherUsername
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setOtherUsername(?string $otherUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($otherUsername) && !is_string($otherUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherUsername, true), gettype($otherUsername)), __LINE__);
        }
        if (is_null($otherUsername) || (is_array($otherUsername) && empty($otherUsername))) {
            unset($this->OtherUsername);
        } else {
            $this->OtherUsername = $otherUsername;
        }
        
        return $this;
    }
    /**
     * Get PhoneContacts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone|null
     */
    public function getPhoneContacts(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone
    {
        return $this->PhoneContacts ?? null;
    }
    /**
     * Set PhoneContacts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone $phoneContacts
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setPhoneContacts(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityContactPhone $phoneContacts = null): self
    {
        if (is_null($phoneContacts) || (is_array($phoneContacts) && empty($phoneContacts))) {
            unset($this->PhoneContacts);
        } else {
            $this->PhoneContacts = $phoneContacts;
        }
        
        return $this;
    }
    /**
     * Get SaleUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaleUsername(): ?string
    {
        return $this->SaleUsername ?? null;
    }
    /**
     * Set SaleUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saleUsername
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setSaleUsername(?string $saleUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($saleUsername) && !is_string($saleUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleUsername, true), gettype($saleUsername)), __LINE__);
        }
        if (is_null($saleUsername) || (is_array($saleUsername) && empty($saleUsername))) {
            unset($this->SaleUsername);
        } else {
            $this->SaleUsername = $saleUsername;
        }
        
        return $this;
    }
    /**
     * Get SourceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }
    /**
     * Set SourceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setSourceType(?string $sourceType = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceType) && !is_string($sourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceType, true), gettype($sourceType)), __LINE__);
        }
        if (is_null($sourceType) || (is_array($sourceType) && empty($sourceType))) {
            unset($this->SourceType);
        } else {
            $this->SourceType = $sourceType;
        }
        
        return $this;
    }
    /**
     * Get SupportUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSupportUsername(): ?string
    {
        return $this->SupportUsername ?? null;
    }
    /**
     * Set SupportUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $supportUsername
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setSupportUsername(?string $supportUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($supportUsername) && !is_string($supportUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supportUsername, true), gettype($supportUsername)), __LINE__);
        }
        if (is_null($supportUsername) || (is_array($supportUsername) && empty($supportUsername))) {
            unset($this->SupportUsername);
        } else {
            $this->SupportUsername = $supportUsername;
        }
        
        return $this;
    }
    /**
     * Get Website value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->Website ?? null;
    }
    /**
     * Set Website value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $website
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
     */
    public function setWebsite(?string $website = null): self
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($website, true), gettype($website)), __LINE__);
        }
        if (is_null($website) || (is_array($website) && empty($website))) {
            unset($this->Website);
        } else {
            $this->Website = $website;
        }
        
        return $this;
    }
}
