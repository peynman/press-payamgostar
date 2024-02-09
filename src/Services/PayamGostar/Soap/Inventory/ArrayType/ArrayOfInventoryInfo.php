<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInventoryInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInventoryInfo
 * @subpackage Arrays
 */
class ArrayOfInventoryInfo extends AbstractStructArrayBase
{
    /**
     * The InventoryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo[]
     */
    protected ?array $InventoryInfo = null;
    /**
     * Constructor method for ArrayOfInventoryInfo
     * @uses ArrayOfInventoryInfo::setInventoryInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo[] $inventoryInfo
     */
    public function __construct(?array $inventoryInfo = null)
    {
        $this
            ->setInventoryInfo($inventoryInfo);
    }
    /**
     * Get InventoryInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo[]
     */
    public function getInventoryInfo(): ?array
    {
        return $this->InventoryInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInventoryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInventoryInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInventoryInfoForArrayConstraintFromSetInventoryInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInventoryInfoInventoryInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfInventoryInfoInventoryInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo) {
                $invalidValues[] = is_object($arrayOfInventoryInfoInventoryInfoItem) ? get_class($arrayOfInventoryInfoInventoryInfoItem) : sprintf('%s(%s)', gettype($arrayOfInventoryInfoInventoryInfoItem), var_export($arrayOfInventoryInfoInventoryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InventoryInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InventoryInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo[] $inventoryInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo
     */
    public function setInventoryInfo(?array $inventoryInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($inventoryInfoArrayErrorMessage = self::validateInventoryInfoForArrayConstraintFromSetInventoryInfo($inventoryInfo))) {
            throw new InvalidArgumentException($inventoryInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($inventoryInfo) || (is_array($inventoryInfo) && empty($inventoryInfo))) {
            unset($this->InventoryInfo);
        } else {
            $this->InventoryInfo = $inventoryInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo) {
            throw new InvalidArgumentException(sprintf('The InventoryInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InventoryInfo
     */
    public function getAttributeName(): string
    {
        return 'InventoryInfo';
    }
}
