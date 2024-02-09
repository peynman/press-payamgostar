<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketInfo
 * @subpackage Arrays
 */
class ArrayOfTicketInfo extends AbstractStructArrayBase
{
    /**
     * The TicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo[]
     */
    protected ?array $TicketInfo = null;
    /**
     * Constructor method for ArrayOfTicketInfo
     * @uses ArrayOfTicketInfo::setTicketInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo[] $ticketInfo
     */
    public function __construct(?array $ticketInfo = null)
    {
        $this
            ->setTicketInfo($ticketInfo);
    }
    /**
     * Get TicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo[]
     */
    public function getTicketInfo(): ?array
    {
        return $this->TicketInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketInfoForArrayConstraintFromSetTicketInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTicketInfoTicketInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketInfoTicketInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo) {
                $invalidValues[] = is_object($arrayOfTicketInfoTicketInfoItem) ? get_class($arrayOfTicketInfoTicketInfoItem) : sprintf('%s(%s)', gettype($arrayOfTicketInfoTicketInfoItem), var_export($arrayOfTicketInfoTicketInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo[] $ticketInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo
     */
    public function setTicketInfo(?array $ticketInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketInfoArrayErrorMessage = self::validateTicketInfoForArrayConstraintFromSetTicketInfo($ticketInfo))) {
            throw new InvalidArgumentException($ticketInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($ticketInfo) || (is_array($ticketInfo) && empty($ticketInfo))) {
            unset($this->TicketInfo);
        } else {
            $this->TicketInfo = $ticketInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo) {
            throw new InvalidArgumentException(sprintf('The TicketInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketInfo
     */
    public function getAttributeName(): string
    {
        return 'TicketInfo';
    }
}
