<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveticketResponse StructType
 * @subpackage Structs
 */
class SaveticketResponse extends AbstractStructBase
{
    /**
     * The SaveticketResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $SaveticketResult = null;
    /**
     * Constructor method for SaveticketResponse
     * @uses SaveticketResponse::setSaveticketResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveticketResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveticketResult = null)
    {
        $this
            ->setSaveticketResult($saveticketResult);
    }
    /**
     * Get SaveticketResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult|null
     */
    public function getSaveticketResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult
    {
        return $this->SaveticketResult ?? null;
    }
    /**
     * Set SaveticketResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveticketResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveticketResponse
     */
    public function setSaveticketResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveCrmObjectResult $saveticketResult = null): self
    {
        if (is_null($saveticketResult) || (is_array($saveticketResult) && empty($saveticketResult))) {
            unset($this->SaveticketResult);
        } else {
            $this->SaveticketResult = $saveticketResult;
        }
        
        return $this;
    }
}
