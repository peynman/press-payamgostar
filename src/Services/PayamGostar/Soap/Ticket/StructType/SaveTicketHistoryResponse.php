<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTicketHistoryResponse StructType
 * @subpackage Structs
 */
class SaveTicketHistoryResponse extends AbstractStructBase
{
    /**
     * The SaveTicketHistoryResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $SaveTicketHistoryResult = null;
    /**
     * Constructor method for SaveTicketHistoryResponse
     * @uses SaveTicketHistoryResponse::setSaveTicketHistoryResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveTicketHistoryResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveTicketHistoryResult = null)
    {
        $this
            ->setSaveTicketHistoryResult($saveTicketHistoryResult);
    }
    /**
     * Get SaveTicketHistoryResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult|null
     */
    public function getSaveTicketHistoryResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult
    {
        return $this->SaveTicketHistoryResult ?? null;
    }
    /**
     * Set SaveTicketHistoryResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveTicketHistoryResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistoryResponse
     */
    public function setSaveTicketHistoryResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveTicketHistoryResult = null): self
    {
        if (is_null($saveTicketHistoryResult) || (is_array($saveTicketHistoryResult) && empty($saveTicketHistoryResult))) {
            unset($this->SaveTicketHistoryResult);
        } else {
            $this->SaveTicketHistoryResult = $saveTicketHistoryResult;
        }
        
        return $this;
    }
}
