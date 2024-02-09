<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInvoiceInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInvoiceInfo
 * @subpackage Arrays
 */
class ArrayOfInvoiceInfo extends AbstractStructArrayBase
{
    /**
     * The InvoiceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo[]
     */
    protected ?array $InvoiceInfo = null;
    /**
     * Constructor method for ArrayOfInvoiceInfo
     * @uses ArrayOfInvoiceInfo::setInvoiceInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo[] $invoiceInfo
     */
    public function __construct(?array $invoiceInfo = null)
    {
        $this
            ->setInvoiceInfo($invoiceInfo);
    }
    /**
     * Get InvoiceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo[]
     */
    public function getInvoiceInfo(): ?array
    {
        return $this->InvoiceInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInvoiceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceInfoForArrayConstraintFromSetInvoiceInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInvoiceInfoInvoiceInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfInvoiceInfoInvoiceInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo) {
                $invalidValues[] = is_object($arrayOfInvoiceInfoInvoiceInfoItem) ? get_class($arrayOfInvoiceInfoInvoiceInfoItem) : sprintf('%s(%s)', gettype($arrayOfInvoiceInfoInvoiceInfoItem), var_export($arrayOfInvoiceInfoInvoiceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo[] $invoiceInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo
     */
    public function setInvoiceInfo(?array $invoiceInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceInfoArrayErrorMessage = self::validateInvoiceInfoForArrayConstraintFromSetInvoiceInfo($invoiceInfo))) {
            throw new InvalidArgumentException($invoiceInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($invoiceInfo) || (is_array($invoiceInfo) && empty($invoiceInfo))) {
            unset($this->InvoiceInfo);
        } else {
            $this->InvoiceInfo = $invoiceInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo) {
            throw new InvalidArgumentException(sprintf('The InvoiceInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InvoiceInfo
     */
    public function getAttributeName(): string
    {
        return 'InvoiceInfo';
    }
}