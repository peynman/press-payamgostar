<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindInvoiceByNumber StructType
 * @subpackage Structs
 */
class FindInvoiceByNumber extends AbstractStructBase
{
    /**
     * The userName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The invoiceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoiceType = null;
    /**
     * The typeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $typeCode = null;
    /**
     * Constructor method for FindInvoiceByNumber
     * @uses FindInvoiceByNumber::setUserName()
     * @uses FindInvoiceByNumber::setPassword()
     * @uses FindInvoiceByNumber::setNumber()
     * @uses FindInvoiceByNumber::setInvoiceType()
     * @uses FindInvoiceByNumber::setTypeCode()
     * @param string $userName
     * @param string $password
     * @param string $number
     * @param string $invoiceType
     * @param string $typeCode
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $number = null, ?string $invoiceType = null, ?string $typeCode = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setNumber($number)
            ->setInvoiceType($invoiceType)
            ->setTypeCode($typeCode);
    }
    /**
     * Get userName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName ?? null;
    }
    /**
     * Set userName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->userName);
        } else {
            $this->userName = $userName;
        }
        
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        
        return $this;
    }
    /**
     * Get number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number ?? null;
    }
    /**
     * Set number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->number);
        } else {
            $this->number = $number;
        }
        
        return $this;
    }
    /**
     * Get invoiceType value
     * @return string|null
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }
    /**
     * Set invoiceType value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\Gp_InvoiceType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\Gp_InvoiceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $invoiceType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber
     */
    public function setInvoiceType(?string $invoiceType = null): self
    {
        // validation for constraint: enumeration
        if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\Gp_InvoiceType::valueIsValid($invoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\Gp_InvoiceType', is_array($invoiceType) ? implode(', ', $invoiceType) : var_export($invoiceType, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\Gp_InvoiceType::getValidValues())), __LINE__);
        }
        $this->invoiceType = $invoiceType;
        
        return $this;
    }
    /**
     * Get typeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode ?? null;
    }
    /**
     * Set typeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber
     */
    public function setTypeCode(?string $typeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($typeCode) && !is_string($typeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCode, true), gettype($typeCode)), __LINE__);
        }
        if (is_null($typeCode) || (is_array($typeCode) && empty($typeCode))) {
            unset($this->typeCode);
        } else {
            $this->typeCode = $typeCode;
        }
        
        return $this;
    }
}
