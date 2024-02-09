<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindAppointmentByIdResponse StructType
 * @subpackage Structs
 */
class FindAppointmentByIdResponse extends AbstractStructBase
{
    /**
     * The FindAppointmentByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $FindAppointmentByIdResult = null;
    /**
     * Constructor method for FindAppointmentByIdResponse
     * @uses FindAppointmentByIdResponse::setFindAppointmentByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $findAppointmentByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $findAppointmentByIdResult = null)
    {
        $this
            ->setFindAppointmentByIdResult($findAppointmentByIdResult);
    }
    /**
     * Get FindAppointmentByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult|null
     */
    public function getFindAppointmentByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult
    {
        return $this->FindAppointmentByIdResult ?? null;
    }
    /**
     * Set FindAppointmentByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $findAppointmentByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\FindAppointmentByIdResponse
     */
    public function setFindAppointmentByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult $findAppointmentByIdResult = null): self
    {
        if (is_null($findAppointmentByIdResult) || (is_array($findAppointmentByIdResult) && empty($findAppointmentByIdResult))) {
            unset($this->FindAppointmentByIdResult);
        } else {
            $this->FindAppointmentByIdResult = $findAppointmentByIdResult;
        }
        
        return $this;
    }
}
