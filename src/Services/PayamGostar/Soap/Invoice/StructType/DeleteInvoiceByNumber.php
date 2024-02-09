<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteInvoiceByNumber StructType
 * @subpackage Structs
 */
class DeleteInvoiceByNumber extends AbstractStructBase
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
     * The deleteOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $deleteOption = null;
    /**
     * Constructor method for DeleteInvoiceByNumber
     * @uses DeleteInvoiceByNumber::setUserName()
     * @uses DeleteInvoiceByNumber::setPassword()
     * @uses DeleteInvoiceByNumber::setNumber()
     * @uses DeleteInvoiceByNumber::setInvoiceType()
     * @uses DeleteInvoiceByNumber::setTypeCode()
     * @uses DeleteInvoiceByNumber::setDeleteOption()
     * @param string $userName
     * @param string $password
     * @param string $number
     * @param string $invoiceType
     * @param string $typeCode
     * @param array|string $deleteOption
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $number = null, ?string $invoiceType = null, ?string $typeCode = null, $deleteOption = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setNumber($number)
            ->setInvoiceType($invoiceType)
            ->setTypeCode($typeCode)
            ->setDeleteOption($deleteOption);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber
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
    /**
     * Get deleteOption value
     * @return string
     */
    public function getDeleteOption(): ?string
    {
        return $this->deleteOption;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDeleteOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteOption method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeleteOptionForListConstraintFromSetDeleteOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteInvoiceByNumberDeleteOptionItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\CrmObjectDeleteOption::valueIsValid($deleteInvoiceByNumberDeleteOptionItem)) {
                $invalidValues[] = is_object($deleteInvoiceByNumberDeleteOptionItem) ? get_class($deleteInvoiceByNumberDeleteOptionItem) : sprintf('%s(%s)', gettype($deleteInvoiceByNumberDeleteOptionItem), var_export($deleteInvoiceByNumberDeleteOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\CrmObjectDeleteOption', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\CrmObjectDeleteOption::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set deleteOption value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\CrmObjectDeleteOption::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType\CrmObjectDeleteOption::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $deleteOption
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber
     */
    public function setDeleteOption($deleteOption = null): self
    {
        // validation for constraint: list
        if ('' !== ($deleteOptionArrayErrorMessage = self::validateDeleteOptionForListConstraintFromSetDeleteOption(is_string($deleteOption) ? explode(' ', $deleteOption) : $deleteOption))) {
            throw new InvalidArgumentException($deleteOptionArrayErrorMessage, __LINE__);
        }
        $this->deleteOption = is_array($deleteOption) ? implode(' ', $deleteOption) : $deleteOption;
        
        return $this;
    }
}
