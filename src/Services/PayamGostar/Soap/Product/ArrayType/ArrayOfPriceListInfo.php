<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPriceListInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPriceListInfo
 * @subpackage Arrays
 */
class ArrayOfPriceListInfo extends AbstractStructArrayBase
{
    /**
     * The PriceListInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo[]
     */
    protected ?array $PriceListInfo = null;
    /**
     * Constructor method for ArrayOfPriceListInfo
     * @uses ArrayOfPriceListInfo::setPriceListInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo[] $priceListInfo
     */
    public function __construct(?array $priceListInfo = null)
    {
        $this
            ->setPriceListInfo($priceListInfo);
    }
    /**
     * Get PriceListInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo[]
     */
    public function getPriceListInfo(): ?array
    {
        return $this->PriceListInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPriceListInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPriceListInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePriceListInfoForArrayConstraintFromSetPriceListInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPriceListInfoPriceListInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPriceListInfoPriceListInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo) {
                $invalidValues[] = is_object($arrayOfPriceListInfoPriceListInfoItem) ? get_class($arrayOfPriceListInfoPriceListInfoItem) : sprintf('%s(%s)', gettype($arrayOfPriceListInfoPriceListInfoItem), var_export($arrayOfPriceListInfoPriceListInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PriceListInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PriceListInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo[] $priceListInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo
     */
    public function setPriceListInfo(?array $priceListInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($priceListInfoArrayErrorMessage = self::validatePriceListInfoForArrayConstraintFromSetPriceListInfo($priceListInfo))) {
            throw new InvalidArgumentException($priceListInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($priceListInfo) || (is_array($priceListInfo) && empty($priceListInfo))) {
            unset($this->PriceListInfo);
        } else {
            $this->PriceListInfo = $priceListInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo) {
            throw new InvalidArgumentException(sprintf('The PriceListInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PriceListInfo
     */
    public function getAttributeName(): string
    {
        return 'PriceListInfo';
    }
}
