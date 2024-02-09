<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAppointmentResponse StructType
 * @subpackage Structs
 */
class SaveAppointmentResponse extends AbstractStructBase
{
    /**
     * The SaveAppointmentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $SaveAppointmentResult = null;
    /**
     * Constructor method for SaveAppointmentResponse
     * @uses SaveAppointmentResponse::setSaveAppointmentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $saveAppointmentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $saveAppointmentResult = null)
    {
        $this
            ->setSaveAppointmentResult($saveAppointmentResult);
    }
    /**
     * Get SaveAppointmentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult|null
     */
    public function getSaveAppointmentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult
    {
        return $this->SaveAppointmentResult ?? null;
    }
    /**
     * Set SaveAppointmentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $saveAppointmentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveAppointmentResponse
     */
    public function setSaveAppointmentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $saveAppointmentResult = null): self
    {
        if (is_null($saveAppointmentResult) || (is_array($saveAppointmentResult) && empty($saveAppointmentResult))) {
            unset($this->SaveAppointmentResult);
        } else {
            $this->SaveAppointmentResult = $saveAppointmentResult;
        }
        
        return $this;
    }
}
