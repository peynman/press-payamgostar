<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPriceListProductInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPriceListProductInfo
 * @subpackage Arrays
 */
class ArrayOfPriceListProductInfo extends AbstractStructArrayBase
{
    /**
     * The PriceListProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo[]
     */
    protected ?array $PriceListProductInfo = null;
    /**
     * Constructor method for ArrayOfPriceListProductInfo
     * @uses ArrayOfPriceListProductInfo::setPriceListProductInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo[] $priceListProductInfo
     */
    public function __construct(?array $priceListProductInfo = null)
    {
        $this
            ->setPriceListProductInfo($priceListProductInfo);
    }
    /**
     * Get PriceListProductInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo[]
     */
    public function getPriceListProductInfo(): ?array
    {
        return $this->PriceListProductInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPriceListProductInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPriceListProductInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePriceListProductInfoForArrayConstraintFromSetPriceListProductInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPriceListProductInfoPriceListProductInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPriceListProductInfoPriceListProductInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo) {
                $invalidValues[] = is_object($arrayOfPriceListProductInfoPriceListProductInfoItem) ? get_class($arrayOfPriceListProductInfoPriceListProductInfoItem) : sprintf('%s(%s)', gettype($arrayOfPriceListProductInfoPriceListProductInfoItem), var_export($arrayOfPriceListProductInfoPriceListProductInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PriceListProductInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PriceListProductInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo[] $priceListProductInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListProductInfo
     */
    public function setPriceListProductInfo(?array $priceListProductInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($priceListProductInfoArrayErrorMessage = self::validatePriceListProductInfoForArrayConstraintFromSetPriceListProductInfo($priceListProductInfo))) {
            throw new InvalidArgumentException($priceListProductInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($priceListProductInfo) || (is_array($priceListProductInfo) && empty($priceListProductInfo))) {
            unset($this->PriceListProductInfo);
        } else {
            $this->PriceListProductInfo = $priceListProductInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListProductInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo) {
            throw new InvalidArgumentException(sprintf('The PriceListProductInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\PriceListProductInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PriceListProductInfo
     */
    public function getAttributeName(): string
    {
        return 'PriceListProductInfo';
    }
}
