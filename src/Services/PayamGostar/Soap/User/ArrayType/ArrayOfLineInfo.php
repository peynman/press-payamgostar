<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLineInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLineInfo
 * @subpackage Arrays
 */
class ArrayOfLineInfo extends AbstractStructArrayBase
{
    /**
     * The LineInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo[]
     */
    protected ?array $LineInfo = null;
    /**
     * Constructor method for ArrayOfLineInfo
     * @uses ArrayOfLineInfo::setLineInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo[] $lineInfo
     */
    public function __construct(?array $lineInfo = null)
    {
        $this
            ->setLineInfo($lineInfo);
    }
    /**
     * Get LineInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo[]
     */
    public function getLineInfo(): ?array
    {
        return $this->LineInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLineInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLineInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineInfoForArrayConstraintFromSetLineInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLineInfoLineInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLineInfoLineInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo) {
                $invalidValues[] = is_object($arrayOfLineInfoLineInfoItem) ? get_class($arrayOfLineInfoLineInfoItem) : sprintf('%s(%s)', gettype($arrayOfLineInfoLineInfoItem), var_export($arrayOfLineInfoLineInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LineInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LineInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo[] $lineInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo
     */
    public function setLineInfo(?array $lineInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($lineInfoArrayErrorMessage = self::validateLineInfoForArrayConstraintFromSetLineInfo($lineInfo))) {
            throw new InvalidArgumentException($lineInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lineInfo) || (is_array($lineInfo) && empty($lineInfo))) {
            unset($this->LineInfo);
        } else {
            $this->LineInfo = $lineInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo) {
            throw new InvalidArgumentException(sprintf('The LineInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LineInfo
     */
    public function getAttributeName(): string
    {
        return 'LineInfo';
    }
}
