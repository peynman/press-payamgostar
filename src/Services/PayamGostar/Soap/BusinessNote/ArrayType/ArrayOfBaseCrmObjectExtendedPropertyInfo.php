<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBaseCrmObjectExtendedPropertyInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBaseCrmObjectExtendedPropertyInfo
 * @subpackage Arrays
 */
class ArrayOfBaseCrmObjectExtendedPropertyInfo extends AbstractStructArrayBase
{
    /**
     * The BaseCrmObjectExtendedPropertyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo[]
     */
    protected ?array $BaseCrmObjectExtendedPropertyInfo = null;
    /**
     * Constructor method for ArrayOfBaseCrmObjectExtendedPropertyInfo
     * @uses ArrayOfBaseCrmObjectExtendedPropertyInfo::setBaseCrmObjectExtendedPropertyInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo[] $baseCrmObjectExtendedPropertyInfo
     */
    public function __construct(?array $baseCrmObjectExtendedPropertyInfo = null)
    {
        $this
            ->setBaseCrmObjectExtendedPropertyInfo($baseCrmObjectExtendedPropertyInfo);
    }
    /**
     * Get BaseCrmObjectExtendedPropertyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo[]
     */
    public function getBaseCrmObjectExtendedPropertyInfo(): ?array
    {
        return $this->BaseCrmObjectExtendedPropertyInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBaseCrmObjectExtendedPropertyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBaseCrmObjectExtendedPropertyInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBaseCrmObjectExtendedPropertyInfoForArrayConstraintFromSetBaseCrmObjectExtendedPropertyInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBaseCrmObjectExtendedPropertyInfoBaseCrmObjectExtendedPropertyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfBaseCrmObjectExtendedPropertyInfoBaseCrmObjectExtendedPropertyInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo) {
                $invalidValues[] = is_object($arrayOfBaseCrmObjectExtendedPropertyInfoBaseCrmObjectExtendedPropertyInfoItem) ? get_class($arrayOfBaseCrmObjectExtendedPropertyInfoBaseCrmObjectExtendedPropertyInfoItem) : sprintf('%s(%s)', gettype($arrayOfBaseCrmObjectExtendedPropertyInfoBaseCrmObjectExtendedPropertyInfoItem), var_export($arrayOfBaseCrmObjectExtendedPropertyInfoBaseCrmObjectExtendedPropertyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BaseCrmObjectExtendedPropertyInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BaseCrmObjectExtendedPropertyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo[] $baseCrmObjectExtendedPropertyInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo
     */
    public function setBaseCrmObjectExtendedPropertyInfo(?array $baseCrmObjectExtendedPropertyInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($baseCrmObjectExtendedPropertyInfoArrayErrorMessage = self::validateBaseCrmObjectExtendedPropertyInfoForArrayConstraintFromSetBaseCrmObjectExtendedPropertyInfo($baseCrmObjectExtendedPropertyInfo))) {
            throw new InvalidArgumentException($baseCrmObjectExtendedPropertyInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($baseCrmObjectExtendedPropertyInfo) || (is_array($baseCrmObjectExtendedPropertyInfo) && empty($baseCrmObjectExtendedPropertyInfo))) {
            unset($this->BaseCrmObjectExtendedPropertyInfo);
        } else {
            $this->BaseCrmObjectExtendedPropertyInfo = $baseCrmObjectExtendedPropertyInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo) {
            throw new InvalidArgumentException(sprintf('The BaseCrmObjectExtendedPropertyInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BaseCrmObjectExtendedPropertyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BaseCrmObjectExtendedPropertyInfo
     */
    public function getAttributeName(): string
    {
        return 'BaseCrmObjectExtendedPropertyInfo';
    }
}
