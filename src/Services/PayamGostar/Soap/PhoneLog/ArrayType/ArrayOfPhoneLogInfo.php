<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneLogInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhoneLogInfo
 * @subpackage Arrays
 */
class ArrayOfPhoneLogInfo extends AbstractStructArrayBase
{
    /**
     * The PhoneLogInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo[]
     */
    protected ?array $PhoneLogInfo = null;
    /**
     * Constructor method for ArrayOfPhoneLogInfo
     * @uses ArrayOfPhoneLogInfo::setPhoneLogInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo[] $phoneLogInfo
     */
    public function __construct(?array $phoneLogInfo = null)
    {
        $this
            ->setPhoneLogInfo($phoneLogInfo);
    }
    /**
     * Get PhoneLogInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo[]
     */
    public function getPhoneLogInfo(): ?array
    {
        return $this->PhoneLogInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPhoneLogInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneLogInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneLogInfoForArrayConstraintFromSetPhoneLogInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneLogInfoPhoneLogInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneLogInfoPhoneLogInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo) {
                $invalidValues[] = is_object($arrayOfPhoneLogInfoPhoneLogInfoItem) ? get_class($arrayOfPhoneLogInfoPhoneLogInfoItem) : sprintf('%s(%s)', gettype($arrayOfPhoneLogInfoPhoneLogInfoItem), var_export($arrayOfPhoneLogInfoPhoneLogInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneLogInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneLogInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo[] $phoneLogInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo
     */
    public function setPhoneLogInfo(?array $phoneLogInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneLogInfoArrayErrorMessage = self::validatePhoneLogInfoForArrayConstraintFromSetPhoneLogInfo($phoneLogInfo))) {
            throw new InvalidArgumentException($phoneLogInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($phoneLogInfo) || (is_array($phoneLogInfo) && empty($phoneLogInfo))) {
            unset($this->PhoneLogInfo);
        } else {
            $this->PhoneLogInfo = $phoneLogInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo) {
            throw new InvalidArgumentException(sprintf('The PhoneLogInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneLogInfo
     */
    public function getAttributeName(): string
    {
        return 'PhoneLogInfo';
    }
}
