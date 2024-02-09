<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistoryByTicketIdResponse StructType
 * @subpackage Structs
 */
class GetHistoryByTicketIdResponse extends AbstractStructBase
{
    /**
     * The GetHistoryByTicketIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult $GetHistoryByTicketIdResult = null;
    /**
     * Constructor method for GetHistoryByTicketIdResponse
     * @uses GetHistoryByTicketIdResponse::setGetHistoryByTicketIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult $getHistoryByTicketIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult $getHistoryByTicketIdResult = null)
    {
        $this
            ->setGetHistoryByTicketIdResult($getHistoryByTicketIdResult);
    }
    /**
     * Get GetHistoryByTicketIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult|null
     */
    public function getGetHistoryByTicketIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult
    {
        return $this->GetHistoryByTicketIdResult ?? null;
    }
    /**
     * Set GetHistoryByTicketIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult $getHistoryByTicketIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetHistoryByTicketIdResponse
     */
    public function setGetHistoryByTicketIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistoryResult $getHistoryByTicketIdResult = null): self
    {
        if (is_null($getHistoryByTicketIdResult) || (is_array($getHistoryByTicketIdResult) && empty($getHistoryByTicketIdResult))) {
            unset($this->GetHistoryByTicketIdResult);
        } else {
            $this->GetHistoryByTicketIdResult = $getHistoryByTicketIdResult;
        }
        
        return $this;
    }
}
