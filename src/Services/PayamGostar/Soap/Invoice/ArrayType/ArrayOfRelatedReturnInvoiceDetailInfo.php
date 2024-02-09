<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRelatedReturnInvoiceDetailInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRelatedReturnInvoiceDetailInfo
 * @subpackage Arrays
 */
class ArrayOfRelatedReturnInvoiceDetailInfo extends AbstractStructArrayBase
{
    /**
     * The RelatedReturnInvoiceDetailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo[]
     */
    protected ?array $RelatedReturnInvoiceDetailInfo = null;
    /**
     * Constructor method for ArrayOfRelatedReturnInvoiceDetailInfo
     * @uses ArrayOfRelatedReturnInvoiceDetailInfo::setRelatedReturnInvoiceDetailInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo[] $relatedReturnInvoiceDetailInfo
     */
    public function __construct(?array $relatedReturnInvoiceDetailInfo = null)
    {
        $this
            ->setRelatedReturnInvoiceDetailInfo($relatedReturnInvoiceDetailInfo);
    }
    /**
     * Get RelatedReturnInvoiceDetailInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo[]
     */
    public function getRelatedReturnInvoiceDetailInfo(): ?array
    {
        return $this->RelatedReturnInvoiceDetailInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRelatedReturnInvoiceDetailInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelatedReturnInvoiceDetailInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelatedReturnInvoiceDetailInfoForArrayConstraintFromSetRelatedReturnInvoiceDetailInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRelatedReturnInvoiceDetailInfoRelatedReturnInvoiceDetailInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfRelatedReturnInvoiceDetailInfoRelatedReturnInvoiceDetailInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo) {
                $invalidValues[] = is_object($arrayOfRelatedReturnInvoiceDetailInfoRelatedReturnInvoiceDetailInfoItem) ? get_class($arrayOfRelatedReturnInvoiceDetailInfoRelatedReturnInvoiceDetailInfoItem) : sprintf('%s(%s)', gettype($arrayOfRelatedReturnInvoiceDetailInfoRelatedReturnInvoiceDetailInfoItem), var_export($arrayOfRelatedReturnInvoiceDetailInfoRelatedReturnInvoiceDetailInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RelatedReturnInvoiceDetailInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RelatedReturnInvoiceDetailInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo[] $relatedReturnInvoiceDetailInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo
     */
    public function setRelatedReturnInvoiceDetailInfo(?array $relatedReturnInvoiceDetailInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($relatedReturnInvoiceDetailInfoArrayErrorMessage = self::validateRelatedReturnInvoiceDetailInfoForArrayConstraintFromSetRelatedReturnInvoiceDetailInfo($relatedReturnInvoiceDetailInfo))) {
            throw new InvalidArgumentException($relatedReturnInvoiceDetailInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($relatedReturnInvoiceDetailInfo) || (is_array($relatedReturnInvoiceDetailInfo) && empty($relatedReturnInvoiceDetailInfo))) {
            unset($this->RelatedReturnInvoiceDetailInfo);
        } else {
            $this->RelatedReturnInvoiceDetailInfo = $relatedReturnInvoiceDetailInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo) {
            throw new InvalidArgumentException(sprintf('The RelatedReturnInvoiceDetailInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RelatedReturnInvoiceDetailInfo
     */
    public function getAttributeName(): string
    {
        return 'RelatedReturnInvoiceDetailInfo';
    }
}
