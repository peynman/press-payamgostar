<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTicketResponse StructType
 * @subpackage Structs
 */
class SearchTicketResponse extends AbstractStructBase
{
    /**
     * The SearchTicketResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $SearchTicketResult = null;
    /**
     * Constructor method for SearchTicketResponse
     * @uses SearchTicketResponse::setSearchTicketResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $searchTicketResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $searchTicketResult = null)
    {
        $this
            ->setSearchTicketResult($searchTicketResult);
    }
    /**
     * Get SearchTicketResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult|null
     */
    public function getSearchTicketResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult
    {
        return $this->SearchTicketResult ?? null;
    }
    /**
     * Set SearchTicketResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $searchTicketResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SearchTicketResponse
     */
    public function setSearchTicketResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $searchTicketResult = null): self
    {
        if (is_null($searchTicketResult) || (is_array($searchTicketResult) && empty($searchTicketResult))) {
            unset($this->SearchTicketResult);
        } else {
            $this->SearchTicketResult = $searchTicketResult;
        }
        
        return $this;
    }
}
