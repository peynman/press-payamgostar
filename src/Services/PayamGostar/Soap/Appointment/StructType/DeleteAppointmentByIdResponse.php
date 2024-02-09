<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAppointmentByIdResponse StructType
 * @subpackage Structs
 */
class DeleteAppointmentByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteAppointmentByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $DeleteAppointmentByIdResult = null;
    /**
     * Constructor method for DeleteAppointmentByIdResponse
     * @uses DeleteAppointmentByIdResponse::setDeleteAppointmentByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $deleteAppointmentByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $deleteAppointmentByIdResult = null)
    {
        $this
            ->setDeleteAppointmentByIdResult($deleteAppointmentByIdResult);
    }
    /**
     * Get DeleteAppointmentByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteAppointmentByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult
    {
        return $this->DeleteAppointmentByIdResult ?? null;
    }
    /**
     * Set DeleteAppointmentByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $deleteAppointmentByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\DeleteAppointmentByIdResponse
     */
    public function setDeleteAppointmentByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveCrmObjectResult $deleteAppointmentByIdResult = null): self
    {
        if (is_null($deleteAppointmentByIdResult) || (is_array($deleteAppointmentByIdResult) && empty($deleteAppointmentByIdResult))) {
            unset($this->DeleteAppointmentByIdResult);
        } else {
            $this->DeleteAppointmentByIdResult = $deleteAppointmentByIdResult;
        }
        
        return $this;
    }
}
