<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketInfoHistory ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketInfoHistory
 * @subpackage Arrays
 */
class ArrayOfTicketInfoHistory extends AbstractStructArrayBase
{
    /**
     * The TicketInfoHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory[]
     */
    protected ?array $TicketInfoHistory = null;
    /**
     * Constructor method for ArrayOfTicketInfoHistory
     * @uses ArrayOfTicketInfoHistory::setTicketInfoHistory()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory[] $ticketInfoHistory
     */
    public function __construct(?array $ticketInfoHistory = null)
    {
        $this
            ->setTicketInfoHistory($ticketInfoHistory);
    }
    /**
     * Get TicketInfoHistory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory[]
     */
    public function getTicketInfoHistory(): ?array
    {
        return $this->TicketInfoHistory ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketInfoHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketInfoHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketInfoHistoryForArrayConstraintFromSetTicketInfoHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTicketInfoHistoryTicketInfoHistoryItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketInfoHistoryTicketInfoHistoryItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory) {
                $invalidValues[] = is_object($arrayOfTicketInfoHistoryTicketInfoHistoryItem) ? get_class($arrayOfTicketInfoHistoryTicketInfoHistoryItem) : sprintf('%s(%s)', gettype($arrayOfTicketInfoHistoryTicketInfoHistoryItem), var_export($arrayOfTicketInfoHistoryTicketInfoHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketInfoHistory property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketInfoHistory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory[] $ticketInfoHistory
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory
     */
    public function setTicketInfoHistory(?array $ticketInfoHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketInfoHistoryArrayErrorMessage = self::validateTicketInfoHistoryForArrayConstraintFromSetTicketInfoHistory($ticketInfoHistory))) {
            throw new InvalidArgumentException($ticketInfoHistoryArrayErrorMessage, __LINE__);
        }
        if (is_null($ticketInfoHistory) || (is_array($ticketInfoHistory) && empty($ticketInfoHistory))) {
            unset($this->TicketInfoHistory);
        } else {
            $this->TicketInfoHistory = $ticketInfoHistory;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory) {
            throw new InvalidArgumentException(sprintf('The TicketInfoHistory property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketInfoHistory
     */
    public function getAttributeName(): string
    {
        return 'TicketInfoHistory';
    }
}
