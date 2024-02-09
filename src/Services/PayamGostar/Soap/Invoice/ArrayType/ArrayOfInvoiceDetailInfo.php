<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInvoiceDetailInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInvoiceDetailInfo
 * @subpackage Arrays
 */
class ArrayOfInvoiceDetailInfo extends AbstractStructArrayBase
{
    /**
     * The InvoiceDetailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo[]
     */
    protected ?array $InvoiceDetailInfo = null;
    /**
     * Constructor method for ArrayOfInvoiceDetailInfo
     * @uses ArrayOfInvoiceDetailInfo::setInvoiceDetailInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo[] $invoiceDetailInfo
     */
    public function __construct(?array $invoiceDetailInfo = null)
    {
        $this
            ->setInvoiceDetailInfo($invoiceDetailInfo);
    }
    /**
     * Get InvoiceDetailInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo[]
     */
    public function getInvoiceDetailInfo(): ?array
    {
        return $this->InvoiceDetailInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInvoiceDetailInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceDetailInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceDetailInfoForArrayConstraintFromSetInvoiceDetailInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInvoiceDetailInfoInvoiceDetailInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfInvoiceDetailInfoInvoiceDetailInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo) {
                $invalidValues[] = is_object($arrayOfInvoiceDetailInfoInvoiceDetailInfoItem) ? get_class($arrayOfInvoiceDetailInfoInvoiceDetailInfoItem) : sprintf('%s(%s)', gettype($arrayOfInvoiceDetailInfoInvoiceDetailInfoItem), var_export($arrayOfInvoiceDetailInfoInvoiceDetailInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceDetailInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceDetailInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo[] $invoiceDetailInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo
     */
    public function setInvoiceDetailInfo(?array $invoiceDetailInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceDetailInfoArrayErrorMessage = self::validateInvoiceDetailInfoForArrayConstraintFromSetInvoiceDetailInfo($invoiceDetailInfo))) {
            throw new InvalidArgumentException($invoiceDetailInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($invoiceDetailInfo) || (is_array($invoiceDetailInfo) && empty($invoiceDetailInfo))) {
            unset($this->InvoiceDetailInfo);
        } else {
            $this->InvoiceDetailInfo = $invoiceDetailInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo) {
            throw new InvalidArgumentException(sprintf('The InvoiceDetailInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InvoiceDetailInfo
     */
    public function getAttributeName(): string
    {
        return 'InvoiceDetailInfo';
    }
}
