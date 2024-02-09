<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AppointmentResult
 * @subpackage Structs
 */
class AppointmentResult extends OperationResult
{
    /**
     * The AppointmentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo $AppointmentInfo = null;
    /**
     * The AppointmentInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo $AppointmentInfoList = null;
    /**
     * Constructor method for AppointmentResult
     * @uses AppointmentResult::setAppointmentInfo()
     * @uses AppointmentResult::setAppointmentInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo $appointmentInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo $appointmentInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo $appointmentInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo $appointmentInfoList = null)
    {
        $this
            ->setAppointmentInfo($appointmentInfo)
            ->setAppointmentInfoList($appointmentInfoList);
    }
    /**
     * Get AppointmentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    public function getAppointmentInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
    {
        return $this->AppointmentInfo ?? null;
    }
    /**
     * Set AppointmentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo $appointmentInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult
     */
    public function setAppointmentInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo $appointmentInfo = null): self
    {
        if (is_null($appointmentInfo) || (is_array($appointmentInfo) && empty($appointmentInfo))) {
            unset($this->AppointmentInfo);
        } else {
            $this->AppointmentInfo = $appointmentInfo;
        }
        
        return $this;
    }
    /**
     * Get AppointmentInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo|null
     */
    public function getAppointmentInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo
    {
        return $this->AppointmentInfoList ?? null;
    }
    /**
     * Set AppointmentInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo $appointmentInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentResult
     */
    public function setAppointmentInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo $appointmentInfoList = null): self
    {
        if (is_null($appointmentInfoList) || (is_array($appointmentInfoList) && empty($appointmentInfoList))) {
            unset($this->AppointmentInfoList);
        } else {
            $this->AppointmentInfoList = $appointmentInfoList;
        }
        
        return $this;
    }
}
