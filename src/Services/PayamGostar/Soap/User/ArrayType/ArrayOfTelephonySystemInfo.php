<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTelephonySystemInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTelephonySystemInfo
 * @subpackage Arrays
 */
class ArrayOfTelephonySystemInfo extends AbstractStructArrayBase
{
    /**
     * The TelephonySystemInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo[]
     */
    protected ?array $TelephonySystemInfo = null;
    /**
     * Constructor method for ArrayOfTelephonySystemInfo
     * @uses ArrayOfTelephonySystemInfo::setTelephonySystemInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo[] $telephonySystemInfo
     */
    public function __construct(?array $telephonySystemInfo = null)
    {
        $this
            ->setTelephonySystemInfo($telephonySystemInfo);
    }
    /**
     * Get TelephonySystemInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo[]
     */
    public function getTelephonySystemInfo(): ?array
    {
        return $this->TelephonySystemInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTelephonySystemInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTelephonySystemInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTelephonySystemInfoForArrayConstraintFromSetTelephonySystemInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTelephonySystemInfoTelephonySystemInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTelephonySystemInfoTelephonySystemInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo) {
                $invalidValues[] = is_object($arrayOfTelephonySystemInfoTelephonySystemInfoItem) ? get_class($arrayOfTelephonySystemInfoTelephonySystemInfoItem) : sprintf('%s(%s)', gettype($arrayOfTelephonySystemInfoTelephonySystemInfoItem), var_export($arrayOfTelephonySystemInfoTelephonySystemInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TelephonySystemInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TelephonySystemInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo[] $telephonySystemInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo
     */
    public function setTelephonySystemInfo(?array $telephonySystemInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($telephonySystemInfoArrayErrorMessage = self::validateTelephonySystemInfoForArrayConstraintFromSetTelephonySystemInfo($telephonySystemInfo))) {
            throw new InvalidArgumentException($telephonySystemInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($telephonySystemInfo) || (is_array($telephonySystemInfo) && empty($telephonySystemInfo))) {
            unset($this->TelephonySystemInfo);
        } else {
            $this->TelephonySystemInfo = $telephonySystemInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo) {
            throw new InvalidArgumentException(sprintf('The TelephonySystemInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TelephonySystemInfo
     */
    public function getAttributeName(): string
    {
        return 'TelephonySystemInfo';
    }
}
