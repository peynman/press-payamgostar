<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductInfo
 * @subpackage Arrays
 */
class ArrayOfProductInfo extends AbstractStructArrayBase
{
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo[]
     */
    protected ?array $ProductInfo = null;
    /**
     * Constructor method for ArrayOfProductInfo
     * @uses ArrayOfProductInfo::setProductInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo[] $productInfo
     */
    public function __construct(?array $productInfo = null)
    {
        $this
            ->setProductInfo($productInfo);
    }
    /**
     * Get ProductInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo[]
     */
    public function getProductInfo(): ?array
    {
        return $this->ProductInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProductInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductInfoForArrayConstraintFromSetProductInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductInfoProductInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductInfoProductInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo) {
                $invalidValues[] = is_object($arrayOfProductInfoProductInfoItem) ? get_class($arrayOfProductInfoProductInfoItem) : sprintf('%s(%s)', gettype($arrayOfProductInfoProductInfoItem), var_export($arrayOfProductInfoProductInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo[] $productInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo
     */
    public function setProductInfo(?array $productInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($productInfoArrayErrorMessage = self::validateProductInfoForArrayConstraintFromSetProductInfo($productInfo))) {
            throw new InvalidArgumentException($productInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($productInfo) || (is_array($productInfo) && empty($productInfo))) {
            unset($this->ProductInfo);
        } else {
            $this->ProductInfo = $productInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo) {
            throw new InvalidArgumentException(sprintf('The ProductInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductInfo
     */
    public function getAttributeName(): string
    {
        return 'ProductInfo';
    }
}
