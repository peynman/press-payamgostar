<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfoHistoryResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketInfoHistoryResult
 * @subpackage Structs
 */
class TicketInfoHistoryResult extends SaveCrmObjectResult
{
    /**
     * The TicketHistory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory $TicketHistory = null;
    /**
     * Constructor method for TicketInfoHistoryResult
     * @uses TicketInfoHistoryResult::setTicketHistory()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory $ticketHistory
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory $ticketHistory = null)
    {
        $this
            ->setTicketHistory($ticketHistory);
    }
    /**
     * Get TicketHistory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory|null
     */
    public function getTicketHistory(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory
    {
        return $this->TicketHistory ?? null;
    }
    /**
     * Set TicketHistory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory $ticketHistory
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult
     */
    public function setTicketHistory(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfoHistory $ticketHistory = null): self
    {
        if (is_null($ticketHistory) || (is_array($ticketHistory) && empty($ticketHistory))) {
            unset($this->TicketHistory);
        } else {
            $this->TicketHistory = $ticketHistory;
        }
        
        return $this;
    }
}
