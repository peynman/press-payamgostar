<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SendAppointmentNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendAppointmentNotifications $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendAppointmentNotificationsResponse|bool
     */
    public function SendAppointmentNotifications(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendAppointmentNotifications $parameters)
    {
        try {
            $this->setResult($resultSendAppointmentNotifications = $this->getSoapClient()->__soapCall('SendAppointmentNotifications', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendAppointmentNotifications;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendCancelAppointmentNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendCancelAppointmentNotifications $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendCancelAppointmentNotificationsResponse|bool
     */
    public function SendCancelAppointmentNotifications(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendCancelAppointmentNotifications $parameters)
    {
        try {
            $this->setResult($resultSendCancelAppointmentNotifications = $this->getSoapClient()->__soapCall('SendCancelAppointmentNotifications', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendCancelAppointmentNotifications;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendAppointmentNotificationsResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SendCancelAppointmentNotificationsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
