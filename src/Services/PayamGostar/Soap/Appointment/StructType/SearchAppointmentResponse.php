<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAppointmentResponse StructType
 * @subpackage Structs
 */
class SearchAppointmentResponse extends AbstractStructBase
{
    /**
     * The SearchAppointmentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $SearchAppointmentResult = null;
    /**
     * Constructor method for SearchAppointmentResponse
     * @uses SearchAppointmentResponse::setSearchAppointmentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $searchAppointmentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $searchAppointmentResult = null)
    {
        $this
            ->setSearchAppointmentResult($searchAppointmentResult);
    }
    /**
     * Get SearchAppointmentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult|null
     */
    public function getSearchAppointmentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult
    {
        return $this->SearchAppointmentResult ?? null;
    }
    /**
     * Set SearchAppointmentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $searchAppointmentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SearchAppointmentResponse
     */
    public function setSearchAppointmentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $searchAppointmentResult = null): self
    {
        if (is_null($searchAppointmentResult) || (is_array($searchAppointmentResult) && empty($searchAppointmentResult))) {
            unset($this->SearchAppointmentResult);
        } else {
            $this->SearchAppointmentResult = $searchAppointmentResult;
        }
        
        return $this;
    }
}
