<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductItemHistory ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductItemHistory
 * @subpackage Arrays
 */
class ArrayOfProductItemHistory extends AbstractStructArrayBase
{
    /**
     * The ProductItemHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory[]
     */
    protected ?array $ProductItemHistory = null;
    /**
     * Constructor method for ArrayOfProductItemHistory
     * @uses ArrayOfProductItemHistory::setProductItemHistory()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory[] $productItemHistory
     */
    public function __construct(?array $productItemHistory = null)
    {
        $this
            ->setProductItemHistory($productItemHistory);
    }
    /**
     * Get ProductItemHistory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory[]
     */
    public function getProductItemHistory(): ?array
    {
        return $this->ProductItemHistory ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProductItemHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductItemHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductItemHistoryForArrayConstraintFromSetProductItemHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductItemHistoryProductItemHistoryItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductItemHistoryProductItemHistoryItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory) {
                $invalidValues[] = is_object($arrayOfProductItemHistoryProductItemHistoryItem) ? get_class($arrayOfProductItemHistoryProductItemHistoryItem) : sprintf('%s(%s)', gettype($arrayOfProductItemHistoryProductItemHistoryItem), var_export($arrayOfProductItemHistoryProductItemHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductItemHistory property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductItemHistory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory[] $productItemHistory
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory
     */
    public function setProductItemHistory(?array $productItemHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($productItemHistoryArrayErrorMessage = self::validateProductItemHistoryForArrayConstraintFromSetProductItemHistory($productItemHistory))) {
            throw new InvalidArgumentException($productItemHistoryArrayErrorMessage, __LINE__);
        }
        if (is_null($productItemHistory) || (is_array($productItemHistory) && empty($productItemHistory))) {
            unset($this->ProductItemHistory);
        } else {
            $this->ProductItemHistory = $productItemHistory;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory) {
            throw new InvalidArgumentException(sprintf('The ProductItemHistory property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductItemHistory
     */
    public function getAttributeName(): string
    {
        return 'ProductItemHistory';
    }
}
