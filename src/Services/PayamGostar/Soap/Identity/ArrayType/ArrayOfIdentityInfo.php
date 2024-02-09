<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIdentityInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIdentityInfo
 * @subpackage Arrays
 */
class ArrayOfIdentityInfo extends AbstractStructArrayBase
{
    /**
     * The IdentityInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo[]
     */
    protected ?array $IdentityInfo = null;
    /**
     * Constructor method for ArrayOfIdentityInfo
     * @uses ArrayOfIdentityInfo::setIdentityInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo[] $identityInfo
     */
    public function __construct(?array $identityInfo = null)
    {
        $this
            ->setIdentityInfo($identityInfo);
    }
    /**
     * Get IdentityInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo[]
     */
    public function getIdentityInfo(): ?array
    {
        return $this->IdentityInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIdentityInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdentityInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdentityInfoForArrayConstraintFromSetIdentityInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIdentityInfoIdentityInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfIdentityInfoIdentityInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo) {
                $invalidValues[] = is_object($arrayOfIdentityInfoIdentityInfoItem) ? get_class($arrayOfIdentityInfoIdentityInfoItem) : sprintf('%s(%s)', gettype($arrayOfIdentityInfoIdentityInfoItem), var_export($arrayOfIdentityInfoIdentityInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IdentityInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IdentityInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo[] $identityInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo
     */
    public function setIdentityInfo(?array $identityInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($identityInfoArrayErrorMessage = self::validateIdentityInfoForArrayConstraintFromSetIdentityInfo($identityInfo))) {
            throw new InvalidArgumentException($identityInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($identityInfo) || (is_array($identityInfo) && empty($identityInfo))) {
            unset($this->IdentityInfo);
        } else {
            $this->IdentityInfo = $identityInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo) {
            throw new InvalidArgumentException(sprintf('The IdentityInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IdentityInfo
     */
    public function getAttributeName(): string
    {
        return 'IdentityInfo';
    }
}
