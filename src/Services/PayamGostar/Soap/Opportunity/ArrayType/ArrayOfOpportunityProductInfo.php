<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOpportunityProductInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOpportunityProductInfo
 * @subpackage Arrays
 */
class ArrayOfOpportunityProductInfo extends AbstractStructArrayBase
{
    /**
     * The OpportunityProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo[]
     */
    protected ?array $OpportunityProductInfo = null;
    /**
     * Constructor method for ArrayOfOpportunityProductInfo
     * @uses ArrayOfOpportunityProductInfo::setOpportunityProductInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo[] $opportunityProductInfo
     */
    public function __construct(?array $opportunityProductInfo = null)
    {
        $this
            ->setOpportunityProductInfo($opportunityProductInfo);
    }
    /**
     * Get OpportunityProductInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo[]
     */
    public function getOpportunityProductInfo(): ?array
    {
        return $this->OpportunityProductInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOpportunityProductInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOpportunityProductInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOpportunityProductInfoForArrayConstraintFromSetOpportunityProductInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOpportunityProductInfoOpportunityProductInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfOpportunityProductInfoOpportunityProductInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo) {
                $invalidValues[] = is_object($arrayOfOpportunityProductInfoOpportunityProductInfoItem) ? get_class($arrayOfOpportunityProductInfoOpportunityProductInfoItem) : sprintf('%s(%s)', gettype($arrayOfOpportunityProductInfoOpportunityProductInfoItem), var_export($arrayOfOpportunityProductInfoOpportunityProductInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OpportunityProductInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OpportunityProductInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo[] $opportunityProductInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo
     */
    public function setOpportunityProductInfo(?array $opportunityProductInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($opportunityProductInfoArrayErrorMessage = self::validateOpportunityProductInfoForArrayConstraintFromSetOpportunityProductInfo($opportunityProductInfo))) {
            throw new InvalidArgumentException($opportunityProductInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($opportunityProductInfo) || (is_array($opportunityProductInfo) && empty($opportunityProductInfo))) {
            unset($this->OpportunityProductInfo);
        } else {
            $this->OpportunityProductInfo = $opportunityProductInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo) {
            throw new InvalidArgumentException(sprintf('The OpportunityProductInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OpportunityProductInfo
     */
    public function getAttributeName(): string
    {
        return 'OpportunityProductInfo';
    }
}
