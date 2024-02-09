<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentLinkInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentLinkInfo
 * @subpackage Structs
 */
class PaymentLinkInfo extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The ExpireAfterDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ExpireAfterDays = null;
    /**
     * The IdentityId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IdentityId = null;
    /**
     * The MobilePhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MobilePhoneNumber = null;
    /**
     * The MoneyAccountUserKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MoneyAccountUserKey = null;
    /**
     * The PaymentTypeUserKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PaymentTypeUserKey = null;
    /**
     * The RegisterReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RegisterReceipt = null;
    /**
     * Constructor method for PaymentLinkInfo
     * @uses PaymentLinkInfo::setAmount()
     * @uses PaymentLinkInfo::setDescription()
     * @uses PaymentLinkInfo::setEmailAddress()
     * @uses PaymentLinkInfo::setExpireAfterDays()
     * @uses PaymentLinkInfo::setIdentityId()
     * @uses PaymentLinkInfo::setMobilePhoneNumber()
     * @uses PaymentLinkInfo::setMoneyAccountUserKey()
     * @uses PaymentLinkInfo::setPaymentTypeUserKey()
     * @uses PaymentLinkInfo::setRegisterReceipt()
     * @param float $amount
     * @param string $description
     * @param string $emailAddress
     * @param int $expireAfterDays
     * @param string $identityId
     * @param string $mobilePhoneNumber
     * @param string $moneyAccountUserKey
     * @param string $paymentTypeUserKey
     * @param bool $registerReceipt
     */
    public function __construct(?float $amount = null, ?string $description = null, ?string $emailAddress = null, ?int $expireAfterDays = null, ?string $identityId = null, ?string $mobilePhoneNumber = null, ?string $moneyAccountUserKey = null, ?string $paymentTypeUserKey = null, ?bool $registerReceipt = null)
    {
        $this
            ->setAmount($amount)
            ->setDescription($description)
            ->setEmailAddress($emailAddress)
            ->setExpireAfterDays($expireAfterDays)
            ->setIdentityId($identityId)
            ->setMobilePhoneNumber($mobilePhoneNumber)
            ->setMoneyAccountUserKey($moneyAccountUserKey)
            ->setPaymentTypeUserKey($paymentTypeUserKey)
            ->setRegisterReceipt($registerReceipt);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress ?? null;
    }
    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailAddress
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->EmailAddress);
        } else {
            $this->EmailAddress = $emailAddress;
        }
        
        return $this;
    }
    /**
     * Get ExpireAfterDays value
     * @return int|null
     */
    public function getExpireAfterDays(): ?int
    {
        return $this->ExpireAfterDays;
    }
    /**
     * Set ExpireAfterDays value
     * @param int $expireAfterDays
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setExpireAfterDays(?int $expireAfterDays = null): self
    {
        // validation for constraint: int
        if (!is_null($expireAfterDays) && !(is_int($expireAfterDays) || ctype_digit($expireAfterDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expireAfterDays, true), gettype($expireAfterDays)), __LINE__);
        }
        $this->ExpireAfterDays = $expireAfterDays;
        
        return $this;
    }
    /**
     * Get IdentityId value
     * @return string|null
     */
    public function getIdentityId(): ?string
    {
        return $this->IdentityId;
    }
    /**
     * Set IdentityId value
     * @param string $identityId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setIdentityId(?string $identityId = null): self
    {
        // validation for constraint: string
        if (!is_null($identityId) && !is_string($identityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityId, true), gettype($identityId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($identityId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $identityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($identityId, true)), __LINE__);
        }
        $this->IdentityId = $identityId;
        
        return $this;
    }
    /**
     * Get MobilePhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->MobilePhoneNumber ?? null;
    }
    /**
     * Set MobilePhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobilePhoneNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilePhoneNumber) && !is_string($mobilePhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhoneNumber, true), gettype($mobilePhoneNumber)), __LINE__);
        }
        if (is_null($mobilePhoneNumber) || (is_array($mobilePhoneNumber) && empty($mobilePhoneNumber))) {
            unset($this->MobilePhoneNumber);
        } else {
            $this->MobilePhoneNumber = $mobilePhoneNumber;
        }
        
        return $this;
    }
    /**
     * Get MoneyAccountUserKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMoneyAccountUserKey(): ?string
    {
        return $this->MoneyAccountUserKey ?? null;
    }
    /**
     * Set MoneyAccountUserKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moneyAccountUserKey
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setMoneyAccountUserKey(?string $moneyAccountUserKey = null): self
    {
        // validation for constraint: string
        if (!is_null($moneyAccountUserKey) && !is_string($moneyAccountUserKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moneyAccountUserKey, true), gettype($moneyAccountUserKey)), __LINE__);
        }
        if (is_null($moneyAccountUserKey) || (is_array($moneyAccountUserKey) && empty($moneyAccountUserKey))) {
            unset($this->MoneyAccountUserKey);
        } else {
            $this->MoneyAccountUserKey = $moneyAccountUserKey;
        }
        
        return $this;
    }
    /**
     * Get PaymentTypeUserKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentTypeUserKey(): ?string
    {
        return $this->PaymentTypeUserKey ?? null;
    }
    /**
     * Set PaymentTypeUserKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentTypeUserKey
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setPaymentTypeUserKey(?string $paymentTypeUserKey = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentTypeUserKey) && !is_string($paymentTypeUserKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTypeUserKey, true), gettype($paymentTypeUserKey)), __LINE__);
        }
        if (is_null($paymentTypeUserKey) || (is_array($paymentTypeUserKey) && empty($paymentTypeUserKey))) {
            unset($this->PaymentTypeUserKey);
        } else {
            $this->PaymentTypeUserKey = $paymentTypeUserKey;
        }
        
        return $this;
    }
    /**
     * Get RegisterReceipt value
     * @return bool|null
     */
    public function getRegisterReceipt(): ?bool
    {
        return $this->RegisterReceipt;
    }
    /**
     * Set RegisterReceipt value
     * @param bool $registerReceipt
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
     */
    public function setRegisterReceipt(?bool $registerReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($registerReceipt) && !is_bool($registerReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($registerReceipt, true), gettype($registerReceipt)), __LINE__);
        }
        $this->RegisterReceipt = $registerReceipt;
        
        return $this;
    }
}
