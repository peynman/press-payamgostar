<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindTicketByIdResponse StructType
 * @subpackage Structs
 */
class FindTicketByIdResponse extends AbstractStructBase
{
    /**
     * The FindTicketByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $FindTicketByIdResult = null;
    /**
     * Constructor method for FindTicketByIdResponse
     * @uses FindTicketByIdResponse::setFindTicketByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $findTicketByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $findTicketByIdResult = null)
    {
        $this
            ->setFindTicketByIdResult($findTicketByIdResult);
    }
    /**
     * Get FindTicketByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult|null
     */
    public function getFindTicketByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult
    {
        return $this->FindTicketByIdResult ?? null;
    }
    /**
     * Set FindTicketByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $findTicketByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FindTicketByIdResponse
     */
    public function setFindTicketByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoResult $findTicketByIdResult = null): self
    {
        if (is_null($findTicketByIdResult) || (is_array($findTicketByIdResult) && empty($findTicketByIdResult))) {
            unset($this->FindTicketByIdResult);
        } else {
            $this->FindTicketByIdResult = $findTicketByIdResult;
        }
        
        return $this;
    }
}
