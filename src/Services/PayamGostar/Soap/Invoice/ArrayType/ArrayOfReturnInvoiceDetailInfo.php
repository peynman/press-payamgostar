<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReturnInvoiceDetailInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReturnInvoiceDetailInfo
 * @subpackage Arrays
 */
class ArrayOfReturnInvoiceDetailInfo extends AbstractStructArrayBase
{
    /**
     * The ReturnInvoiceDetailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo[]
     */
    protected ?array $ReturnInvoiceDetailInfo = null;
    /**
     * Constructor method for ArrayOfReturnInvoiceDetailInfo
     * @uses ArrayOfReturnInvoiceDetailInfo::setReturnInvoiceDetailInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo[] $returnInvoiceDetailInfo
     */
    public function __construct(?array $returnInvoiceDetailInfo = null)
    {
        $this
            ->setReturnInvoiceDetailInfo($returnInvoiceDetailInfo);
    }
    /**
     * Get ReturnInvoiceDetailInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo[]
     */
    public function getReturnInvoiceDetailInfo(): ?array
    {
        return $this->ReturnInvoiceDetailInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReturnInvoiceDetailInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturnInvoiceDetailInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnInvoiceDetailInfoForArrayConstraintFromSetReturnInvoiceDetailInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReturnInvoiceDetailInfoReturnInvoiceDetailInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfReturnInvoiceDetailInfoReturnInvoiceDetailInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo) {
                $invalidValues[] = is_object($arrayOfReturnInvoiceDetailInfoReturnInvoiceDetailInfoItem) ? get_class($arrayOfReturnInvoiceDetailInfoReturnInvoiceDetailInfoItem) : sprintf('%s(%s)', gettype($arrayOfReturnInvoiceDetailInfoReturnInvoiceDetailInfoItem), var_export($arrayOfReturnInvoiceDetailInfoReturnInvoiceDetailInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReturnInvoiceDetailInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReturnInvoiceDetailInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo[] $returnInvoiceDetailInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo
     */
    public function setReturnInvoiceDetailInfo(?array $returnInvoiceDetailInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnInvoiceDetailInfoArrayErrorMessage = self::validateReturnInvoiceDetailInfoForArrayConstraintFromSetReturnInvoiceDetailInfo($returnInvoiceDetailInfo))) {
            throw new InvalidArgumentException($returnInvoiceDetailInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($returnInvoiceDetailInfo) || (is_array($returnInvoiceDetailInfo) && empty($returnInvoiceDetailInfo))) {
            unset($this->ReturnInvoiceDetailInfo);
        } else {
            $this->ReturnInvoiceDetailInfo = $returnInvoiceDetailInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo) {
            throw new InvalidArgumentException(sprintf('The ReturnInvoiceDetailInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReturnInvoiceDetailInfo
     */
    public function getAttributeName(): string
    {
        return 'ReturnInvoiceDetailInfo';
    }
}
