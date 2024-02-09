<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendAppointmentNotificationsResponse StructType
 * @subpackage Structs
 */
class SendAppointmentNotificationsResponse extends AbstractStructBase
{
    /**
     * The SendAppointmentNotificationsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult $SendAppointmentNotificationsResult = null;
    /**
     * Constructor method for SendAppointmentNotificationsResponse
     * @uses SendAppointmentNotificationsResponse::setSendAppointmentNotificationsResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult $sendAppointmentNotificationsResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult $sendAppointmentNotificationsResult = null)
    {
        $this
            ->setSendAppointmentNotificationsResult($sendAppointmentNotificationsResult);
    }
    /**
     * Get SendAppointmentNotificationsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult|null
     */
    public function getSendAppointmentNotificationsResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult
    {
        return $this->SendAppointmentNotificationsResult ?? null;
    }
    /**
     * Set SendAppointmentNotificationsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult $sendAppointmentNotificationsResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendAppointmentNotificationsResponse
     */
    public function setSendAppointmentNotificationsResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\OperationResult $sendAppointmentNotificationsResult = null): self
    {
        if (is_null($sendAppointmentNotificationsResult) || (is_array($sendAppointmentNotificationsResult) && empty($sendAppointmentNotificationsResult))) {
            unset($this->SendAppointmentNotificationsResult);
        } else {
            $this->SendAppointmentNotificationsResult = $sendAppointmentNotificationsResult;
        }
        
        return $this;
    }
}
