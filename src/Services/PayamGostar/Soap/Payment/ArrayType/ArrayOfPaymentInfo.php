<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaymentInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPaymentInfo
 * @subpackage Arrays
 */
class ArrayOfPaymentInfo extends AbstractStructArrayBase
{
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo[]
     */
    protected ?array $PaymentInfo = null;
    /**
     * Constructor method for ArrayOfPaymentInfo
     * @uses ArrayOfPaymentInfo::setPaymentInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo[] $paymentInfo
     */
    public function __construct(?array $paymentInfo = null)
    {
        $this
            ->setPaymentInfo($paymentInfo);
    }
    /**
     * Get PaymentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo[]
     */
    public function getPaymentInfo(): ?array
    {
        return $this->PaymentInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPaymentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentInfoForArrayConstraintFromSetPaymentInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaymentInfoPaymentInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaymentInfoPaymentInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo) {
                $invalidValues[] = is_object($arrayOfPaymentInfoPaymentInfoItem) ? get_class($arrayOfPaymentInfoPaymentInfoItem) : sprintf('%s(%s)', gettype($arrayOfPaymentInfoPaymentInfoItem), var_export($arrayOfPaymentInfoPaymentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo[] $paymentInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo
     */
    public function setPaymentInfo(?array $paymentInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentInfoArrayErrorMessage = self::validatePaymentInfoForArrayConstraintFromSetPaymentInfo($paymentInfo))) {
            throw new InvalidArgumentException($paymentInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($paymentInfo) || (is_array($paymentInfo) && empty($paymentInfo))) {
            unset($this->PaymentInfo);
        } else {
            $this->PaymentInfo = $paymentInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo) {
            throw new InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PaymentInfo
     */
    public function getAttributeName(): string
    {
        return 'PaymentInfo';
    }
}
