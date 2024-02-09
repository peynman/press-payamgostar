<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTicketFileResponse StructType
 * @subpackage Structs
 */
class GetTicketFileResponse extends AbstractStructBase
{
    /**
     * The GetTicketFileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult $GetTicketFileResult = null;
    /**
     * Constructor method for GetTicketFileResponse
     * @uses GetTicketFileResponse::setGetTicketFileResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult $getTicketFileResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult $getTicketFileResult = null)
    {
        $this
            ->setGetTicketFileResult($getTicketFileResult);
    }
    /**
     * Get GetTicketFileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult|null
     */
    public function getGetTicketFileResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult
    {
        return $this->GetTicketFileResult ?? null;
    }
    /**
     * Set GetTicketFileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult $getTicketFileResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetTicketFileResponse
     */
    public function setGetTicketFileResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult $getTicketFileResult = null): self
    {
        if (is_null($getTicketFileResult) || (is_array($getTicketFileResult) && empty($getTicketFileResult))) {
            unset($this->GetTicketFileResult);
        } else {
            $this->GetTicketFileResult = $getTicketFileResult;
        }
        
        return $this;
    }
}
