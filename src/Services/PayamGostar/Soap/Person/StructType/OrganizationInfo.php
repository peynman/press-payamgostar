<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrganizationInfo
 * @subpackage Structs
 */
class OrganizationInfo extends IdentityInfo
{
    /**
     * The BusinessType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BusinessType = null;
    /**
     * The EconomicCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EconomicCode = null;
    /**
     * The ManagerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ManagerId = null;
    /**
     * The OwnershipType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OwnershipType = null;
    /**
     * The Personnel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $Personnel = null;
    /**
     * The RegisterDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RegisterDate = null;
    /**
     * The RegisterNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RegisterNumber = null;
    /**
     * The ShareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShareType = null;
    /**
     * The TradeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TradeType = null;
    /**
     * The Trademark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Trademark = null;
    /**
     * Constructor method for OrganizationInfo
     * @uses OrganizationInfo::setBusinessType()
     * @uses OrganizationInfo::setEconomicCode()
     * @uses OrganizationInfo::setManagerId()
     * @uses OrganizationInfo::setOwnershipType()
     * @uses OrganizationInfo::setPersonnel()
     * @uses OrganizationInfo::setRegisterDate()
     * @uses OrganizationInfo::setRegisterNumber()
     * @uses OrganizationInfo::setShareType()
     * @uses OrganizationInfo::setTradeType()
     * @uses OrganizationInfo::setTrademark()
     * @param string $businessType
     * @param string $economicCode
     * @param string $managerId
     * @param string $ownershipType
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $personnel
     * @param string $registerDate
     * @param string $registerNumber
     * @param string $shareType
     * @param string $tradeType
     * @param string $trademark
     */
    public function __construct(?string $businessType = null, ?string $economicCode = null, ?string $managerId = null, ?string $ownershipType = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $personnel = null, ?string $registerDate = null, ?string $registerNumber = null, ?string $shareType = null, ?string $tradeType = null, ?string $trademark = null)
    {
        $this
            ->setBusinessType($businessType)
            ->setEconomicCode($economicCode)
            ->setManagerId($managerId)
            ->setOwnershipType($ownershipType)
            ->setPersonnel($personnel)
            ->setRegisterDate($registerDate)
            ->setRegisterNumber($registerNumber)
            ->setShareType($shareType)
            ->setTradeType($tradeType)
            ->setTrademark($trademark);
    }
    /**
     * Get BusinessType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBusinessType(): ?string
    {
        return $this->BusinessType ?? null;
    }
    /**
     * Set BusinessType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $businessType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setBusinessType(?string $businessType = null): self
    {
        // validation for constraint: string
        if (!is_null($businessType) && !is_string($businessType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessType, true), gettype($businessType)), __LINE__);
        }
        if (is_null($businessType) || (is_array($businessType) && empty($businessType))) {
            unset($this->BusinessType);
        } else {
            $this->BusinessType = $businessType;
        }
        
        return $this;
    }
    /**
     * Get EconomicCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEconomicCode(): ?string
    {
        return $this->EconomicCode ?? null;
    }
    /**
     * Set EconomicCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $economicCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setEconomicCode(?string $economicCode = null): self
    {
        // validation for constraint: string
        if (!is_null($economicCode) && !is_string($economicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($economicCode, true), gettype($economicCode)), __LINE__);
        }
        if (is_null($economicCode) || (is_array($economicCode) && empty($economicCode))) {
            unset($this->EconomicCode);
        } else {
            $this->EconomicCode = $economicCode;
        }
        
        return $this;
    }
    /**
     * Get ManagerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getManagerId(): ?string
    {
        return $this->ManagerId ?? null;
    }
    /**
     * Set ManagerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $managerId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setManagerId(?string $managerId = null): self
    {
        // validation for constraint: string
        if (!is_null($managerId) && !is_string($managerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($managerId, true), gettype($managerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($managerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $managerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($managerId, true)), __LINE__);
        }
        if (is_null($managerId) || (is_array($managerId) && empty($managerId))) {
            unset($this->ManagerId);
        } else {
            $this->ManagerId = $managerId;
        }
        
        return $this;
    }
    /**
     * Get OwnershipType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOwnershipType(): ?string
    {
        return $this->OwnershipType ?? null;
    }
    /**
     * Set OwnershipType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ownershipType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setOwnershipType(?string $ownershipType = null): self
    {
        // validation for constraint: string
        if (!is_null($ownershipType) && !is_string($ownershipType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownershipType, true), gettype($ownershipType)), __LINE__);
        }
        if (is_null($ownershipType) || (is_array($ownershipType) && empty($ownershipType))) {
            unset($this->OwnershipType);
        } else {
            $this->OwnershipType = $ownershipType;
        }
        
        return $this;
    }
    /**
     * Get Personnel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo|null
     */
    public function getPersonnel(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo
    {
        return $this->Personnel ?? null;
    }
    /**
     * Set Personnel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $personnel
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setPersonnel(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $personnel = null): self
    {
        if (is_null($personnel) || (is_array($personnel) && empty($personnel))) {
            unset($this->Personnel);
        } else {
            $this->Personnel = $personnel;
        }
        
        return $this;
    }
    /**
     * Get RegisterDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegisterDate(): ?string
    {
        return $this->RegisterDate ?? null;
    }
    /**
     * Set RegisterDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registerDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setRegisterDate(?string $registerDate = null): self
    {
        // validation for constraint: string
        if (!is_null($registerDate) && !is_string($registerDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registerDate, true), gettype($registerDate)), __LINE__);
        }
        if (is_null($registerDate) || (is_array($registerDate) && empty($registerDate))) {
            unset($this->RegisterDate);
        } else {
            $this->RegisterDate = $registerDate;
        }
        
        return $this;
    }
    /**
     * Get RegisterNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegisterNumber(): ?string
    {
        return $this->RegisterNumber ?? null;
    }
    /**
     * Set RegisterNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registerNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setRegisterNumber(?string $registerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($registerNumber) && !is_string($registerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registerNumber, true), gettype($registerNumber)), __LINE__);
        }
        if (is_null($registerNumber) || (is_array($registerNumber) && empty($registerNumber))) {
            unset($this->RegisterNumber);
        } else {
            $this->RegisterNumber = $registerNumber;
        }
        
        return $this;
    }
    /**
     * Get ShareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShareType(): ?string
    {
        return $this->ShareType ?? null;
    }
    /**
     * Set ShareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shareType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setShareType(?string $shareType = null): self
    {
        // validation for constraint: string
        if (!is_null($shareType) && !is_string($shareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shareType, true), gettype($shareType)), __LINE__);
        }
        if (is_null($shareType) || (is_array($shareType) && empty($shareType))) {
            unset($this->ShareType);
        } else {
            $this->ShareType = $shareType;
        }
        
        return $this;
    }
    /**
     * Get TradeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTradeType(): ?string
    {
        return $this->TradeType ?? null;
    }
    /**
     * Set TradeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tradeType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setTradeType(?string $tradeType = null): self
    {
        // validation for constraint: string
        if (!is_null($tradeType) && !is_string($tradeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeType, true), gettype($tradeType)), __LINE__);
        }
        if (is_null($tradeType) || (is_array($tradeType) && empty($tradeType))) {
            unset($this->TradeType);
        } else {
            $this->TradeType = $tradeType;
        }
        
        return $this;
    }
    /**
     * Get Trademark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTrademark(): ?string
    {
        return $this->Trademark ?? null;
    }
    /**
     * Set Trademark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $trademark
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\OrganizationInfo
     */
    public function setTrademark(?string $trademark = null): self
    {
        // validation for constraint: string
        if (!is_null($trademark) && !is_string($trademark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trademark, true), gettype($trademark)), __LINE__);
        }
        if (is_null($trademark) || (is_array($trademark) && empty($trademark))) {
            unset($this->Trademark);
        } else {
            $this->Trademark = $trademark;
        }
        
        return $this;
    }
}
