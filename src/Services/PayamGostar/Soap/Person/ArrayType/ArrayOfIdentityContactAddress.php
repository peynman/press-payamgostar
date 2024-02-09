<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIdentityContactAddress ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIdentityContactAddress
 * @subpackage Arrays
 */
class ArrayOfIdentityContactAddress extends AbstractStructArrayBase
{
    /**
     * The IdentityContactAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress[]
     */
    protected ?array $IdentityContactAddress = null;
    /**
     * Constructor method for ArrayOfIdentityContactAddress
     * @uses ArrayOfIdentityContactAddress::setIdentityContactAddress()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress[] $identityContactAddress
     */
    public function __construct(?array $identityContactAddress = null)
    {
        $this
            ->setIdentityContactAddress($identityContactAddress);
    }
    /**
     * Get IdentityContactAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress[]
     */
    public function getIdentityContactAddress(): ?array
    {
        return $this->IdentityContactAddress ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIdentityContactAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdentityContactAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdentityContactAddressForArrayConstraintFromSetIdentityContactAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIdentityContactAddressIdentityContactAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfIdentityContactAddressIdentityContactAddressItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress) {
                $invalidValues[] = is_object($arrayOfIdentityContactAddressIdentityContactAddressItem) ? get_class($arrayOfIdentityContactAddressIdentityContactAddressItem) : sprintf('%s(%s)', gettype($arrayOfIdentityContactAddressIdentityContactAddressItem), var_export($arrayOfIdentityContactAddressIdentityContactAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IdentityContactAddress property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IdentityContactAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress[] $identityContactAddress
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfIdentityContactAddress
     */
    public function setIdentityContactAddress(?array $identityContactAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($identityContactAddressArrayErrorMessage = self::validateIdentityContactAddressForArrayConstraintFromSetIdentityContactAddress($identityContactAddress))) {
            throw new InvalidArgumentException($identityContactAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($identityContactAddress) || (is_array($identityContactAddress) && empty($identityContactAddress))) {
            unset($this->IdentityContactAddress);
        } else {
            $this->IdentityContactAddress = $identityContactAddress;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfIdentityContactAddress
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress) {
            throw new InvalidArgumentException(sprintf('The IdentityContactAddress property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IdentityContactAddress
     */
    public function getAttributeName(): string
    {
        return 'IdentityContactAddress';
    }
}
