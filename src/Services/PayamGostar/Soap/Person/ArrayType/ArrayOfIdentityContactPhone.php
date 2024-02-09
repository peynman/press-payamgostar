<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIdentityContactPhone ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIdentityContactPhone
 * @subpackage Arrays
 */
class ArrayOfIdentityContactPhone extends AbstractStructArrayBase
{
    /**
     * The IdentityContactPhone
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone[]
     */
    protected ?array $IdentityContactPhone = null;
    /**
     * Constructor method for ArrayOfIdentityContactPhone
     * @uses ArrayOfIdentityContactPhone::setIdentityContactPhone()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone[] $identityContactPhone
     */
    public function __construct(?array $identityContactPhone = null)
    {
        $this
            ->setIdentityContactPhone($identityContactPhone);
    }
    /**
     * Get IdentityContactPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone[]
     */
    public function getIdentityContactPhone(): ?array
    {
        return $this->IdentityContactPhone ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIdentityContactPhone method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdentityContactPhone method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdentityContactPhoneForArrayConstraintFromSetIdentityContactPhone(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIdentityContactPhoneIdentityContactPhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfIdentityContactPhoneIdentityContactPhoneItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone) {
                $invalidValues[] = is_object($arrayOfIdentityContactPhoneIdentityContactPhoneItem) ? get_class($arrayOfIdentityContactPhoneIdentityContactPhoneItem) : sprintf('%s(%s)', gettype($arrayOfIdentityContactPhoneIdentityContactPhoneItem), var_export($arrayOfIdentityContactPhoneIdentityContactPhoneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IdentityContactPhone property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IdentityContactPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone[] $identityContactPhone
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfIdentityContactPhone
     */
    public function setIdentityContactPhone(?array $identityContactPhone = null): self
    {
        // validation for constraint: array
        if ('' !== ($identityContactPhoneArrayErrorMessage = self::validateIdentityContactPhoneForArrayConstraintFromSetIdentityContactPhone($identityContactPhone))) {
            throw new InvalidArgumentException($identityContactPhoneArrayErrorMessage, __LINE__);
        }
        if (is_null($identityContactPhone) || (is_array($identityContactPhone) && empty($identityContactPhone))) {
            unset($this->IdentityContactPhone);
        } else {
            $this->IdentityContactPhone = $identityContactPhone;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfIdentityContactPhone
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone) {
            throw new InvalidArgumentException(sprintf('The IdentityContactPhone property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContactPhone, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IdentityContactPhone
     */
    public function getAttributeName(): string
    {
        return 'IdentityContactPhone';
    }
}
