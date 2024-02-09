<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrganizationInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrganizationInfo
 * @subpackage Arrays
 */
class ArrayOfOrganizationInfo extends AbstractStructArrayBase
{
    /**
     * The OrganizationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo[]
     */
    protected ?array $OrganizationInfo = null;
    /**
     * Constructor method for ArrayOfOrganizationInfo
     * @uses ArrayOfOrganizationInfo::setOrganizationInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo[] $organizationInfo
     */
    public function __construct(?array $organizationInfo = null)
    {
        $this
            ->setOrganizationInfo($organizationInfo);
    }
    /**
     * Get OrganizationInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo[]
     */
    public function getOrganizationInfo(): ?array
    {
        return $this->OrganizationInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrganizationInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganizationInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganizationInfoForArrayConstraintFromSetOrganizationInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrganizationInfoOrganizationInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrganizationInfoOrganizationInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo) {
                $invalidValues[] = is_object($arrayOfOrganizationInfoOrganizationInfoItem) ? get_class($arrayOfOrganizationInfoOrganizationInfoItem) : sprintf('%s(%s)', gettype($arrayOfOrganizationInfoOrganizationInfoItem), var_export($arrayOfOrganizationInfoOrganizationInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrganizationInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrganizationInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo[] $organizationInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo
     */
    public function setOrganizationInfo(?array $organizationInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($organizationInfoArrayErrorMessage = self::validateOrganizationInfoForArrayConstraintFromSetOrganizationInfo($organizationInfo))) {
            throw new InvalidArgumentException($organizationInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($organizationInfo) || (is_array($organizationInfo) && empty($organizationInfo))) {
            unset($this->OrganizationInfo);
        } else {
            $this->OrganizationInfo = $organizationInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo) {
            throw new InvalidArgumentException(sprintf('The OrganizationInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrganizationInfo
     */
    public function getAttributeName(): string
    {
        return 'OrganizationInfo';
    }
}
