<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketInfoResult
 * @subpackage Structs
 */
class TicketInfoResult extends SaveCrmObjectResult
{
    /**
     * The TicketInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $TicketInfo = null;
    /**
     * The TicketInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo $TicketInfoList = null;
    /**
     * Constructor method for TicketInfoResult
     * @uses TicketInfoResult::setTicketInfo()
     * @uses TicketInfoResult::setTicketInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo $ticketInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo $ticketInfoList = null)
    {
        $this
            ->setTicketInfo($ticketInfo)
            ->setTicketInfoList($ticketInfoList);
    }
    /**
     * Get TicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function getTicketInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return $this->TicketInfo ?? null;
    }
    /**
     * Set TicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult
     */
    public function setTicketInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo = null): self
    {
        if (is_null($ticketInfo) || (is_array($ticketInfo) && empty($ticketInfo))) {
            unset($this->TicketInfo);
        } else {
            $this->TicketInfo = $ticketInfo;
        }
        
        return $this;
    }
    /**
     * Get TicketInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo|null
     */
    public function getTicketInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo
    {
        return $this->TicketInfoList ?? null;
    }
    /**
     * Set TicketInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo $ticketInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult
     */
    public function setTicketInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfTicketInfo $ticketInfoList = null): self
    {
        if (is_null($ticketInfoList) || (is_array($ticketInfoList) && empty($ticketInfoList))) {
            unset($this->TicketInfoList);
        } else {
            $this->TicketInfoList = $ticketInfoList;
        }
        
        return $this;
    }
}
