<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTicketByIdResponse StructType
 * @subpackage Structs
 */
class DeleteTicketByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteTicketByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $DeleteTicketByIdResult = null;
    /**
     * Constructor method for DeleteTicketByIdResponse
     * @uses DeleteTicketByIdResponse::setDeleteTicketByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $deleteTicketByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $deleteTicketByIdResult = null)
    {
        $this
            ->setDeleteTicketByIdResult($deleteTicketByIdResult);
    }
    /**
     * Get DeleteTicketByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteTicketByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult
    {
        return $this->DeleteTicketByIdResult ?? null;
    }
    /**
     * Set DeleteTicketByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $deleteTicketByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketByIdResponse
     */
    public function setDeleteTicketByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $deleteTicketByIdResult = null): self
    {
        if (is_null($deleteTicketByIdResult) || (is_array($deleteTicketByIdResult) && empty($deleteTicketByIdResult))) {
            unset($this->DeleteTicketByIdResult);
        } else {
            $this->DeleteTicketByIdResult = $deleteTicketByIdResult;
        }
        
        return $this;
    }
}
