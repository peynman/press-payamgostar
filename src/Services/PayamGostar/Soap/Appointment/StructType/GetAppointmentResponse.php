<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAppointmentResponse StructType
 * @subpackage Structs
 */
class GetAppointmentResponse extends AbstractStructBase
{
    /**
     * The GetAppointmentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $GetAppointmentResult = null;
    /**
     * Constructor method for GetAppointmentResponse
     * @uses GetAppointmentResponse::setGetAppointmentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $getAppointmentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $getAppointmentResult = null)
    {
        $this
            ->setGetAppointmentResult($getAppointmentResult);
    }
    /**
     * Get GetAppointmentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult|null
     */
    public function getGetAppointmentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult
    {
        return $this->GetAppointmentResult ?? null;
    }
    /**
     * Set GetAppointmentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $getAppointmentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\GetAppointmentResponse
     */
    public function setGetAppointmentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $getAppointmentResult = null): self
    {
        if (is_null($getAppointmentResult) || (is_array($getAppointmentResult) && empty($getAppointmentResult))) {
            unset($this->GetAppointmentResult);
        } else {
            $this->GetAppointmentResult = $getAppointmentResult;
        }
        
        return $this;
    }
}
