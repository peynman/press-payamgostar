<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCategoryInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCategoryInfo
 * @subpackage Arrays
 */
class ArrayOfCategoryInfo extends AbstractStructArrayBase
{
    /**
     * The CategoryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo[]
     */
    protected ?array $CategoryInfo = null;
    /**
     * Constructor method for ArrayOfCategoryInfo
     * @uses ArrayOfCategoryInfo::setCategoryInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo[] $categoryInfo
     */
    public function __construct(?array $categoryInfo = null)
    {
        $this
            ->setCategoryInfo($categoryInfo);
    }
    /**
     * Get CategoryInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo[]
     */
    public function getCategoryInfo(): ?array
    {
        return $this->CategoryInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCategoryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryInfoForArrayConstraintFromSetCategoryInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCategoryInfoCategoryInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfCategoryInfoCategoryInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo) {
                $invalidValues[] = is_object($arrayOfCategoryInfoCategoryInfoItem) ? get_class($arrayOfCategoryInfoCategoryInfoItem) : sprintf('%s(%s)', gettype($arrayOfCategoryInfoCategoryInfoItem), var_export($arrayOfCategoryInfoCategoryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo[] $categoryInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo
     */
    public function setCategoryInfo(?array $categoryInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryInfoArrayErrorMessage = self::validateCategoryInfoForArrayConstraintFromSetCategoryInfo($categoryInfo))) {
            throw new InvalidArgumentException($categoryInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($categoryInfo) || (is_array($categoryInfo) && empty($categoryInfo))) {
            unset($this->CategoryInfo);
        } else {
            $this->CategoryInfo = $categoryInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfCategoryInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo) {
            throw new InvalidArgumentException(sprintf('The CategoryInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\CategoryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CategoryInfo
     */
    public function getAttributeName(): string
    {
        return 'CategoryInfo';
    }
}
