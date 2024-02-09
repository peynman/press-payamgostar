<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTelephonySystemExtensionInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTelephonySystemExtensionInfo
 * @subpackage Arrays
 */
class ArrayOfTelephonySystemExtensionInfo extends AbstractStructArrayBase
{
    /**
     * The TelephonySystemExtensionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo[]
     */
    protected ?array $TelephonySystemExtensionInfo = null;
    /**
     * Constructor method for ArrayOfTelephonySystemExtensionInfo
     * @uses ArrayOfTelephonySystemExtensionInfo::setTelephonySystemExtensionInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo[] $telephonySystemExtensionInfo
     */
    public function __construct(?array $telephonySystemExtensionInfo = null)
    {
        $this
            ->setTelephonySystemExtensionInfo($telephonySystemExtensionInfo);
    }
    /**
     * Get TelephonySystemExtensionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo[]
     */
    public function getTelephonySystemExtensionInfo(): ?array
    {
        return $this->TelephonySystemExtensionInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTelephonySystemExtensionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTelephonySystemExtensionInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTelephonySystemExtensionInfoForArrayConstraintFromSetTelephonySystemExtensionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTelephonySystemExtensionInfoTelephonySystemExtensionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTelephonySystemExtensionInfoTelephonySystemExtensionInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo) {
                $invalidValues[] = is_object($arrayOfTelephonySystemExtensionInfoTelephonySystemExtensionInfoItem) ? get_class($arrayOfTelephonySystemExtensionInfoTelephonySystemExtensionInfoItem) : sprintf('%s(%s)', gettype($arrayOfTelephonySystemExtensionInfoTelephonySystemExtensionInfoItem), var_export($arrayOfTelephonySystemExtensionInfoTelephonySystemExtensionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TelephonySystemExtensionInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TelephonySystemExtensionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo[] $telephonySystemExtensionInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo
     */
    public function setTelephonySystemExtensionInfo(?array $telephonySystemExtensionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($telephonySystemExtensionInfoArrayErrorMessage = self::validateTelephonySystemExtensionInfoForArrayConstraintFromSetTelephonySystemExtensionInfo($telephonySystemExtensionInfo))) {
            throw new InvalidArgumentException($telephonySystemExtensionInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($telephonySystemExtensionInfo) || (is_array($telephonySystemExtensionInfo) && empty($telephonySystemExtensionInfo))) {
            unset($this->TelephonySystemExtensionInfo);
        } else {
            $this->TelephonySystemExtensionInfo = $telephonySystemExtensionInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo) {
            throw new InvalidArgumentException(sprintf('The TelephonySystemExtensionInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemExtensionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TelephonySystemExtensionInfo
     */
    public function getAttributeName(): string
    {
        return 'TelephonySystemExtensionInfo';
    }
}
