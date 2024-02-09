<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetAppointment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\GetAppointment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\GetAppointmentResponse|bool
     */
    public function GetAppointment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\GetAppointment $parameters)
    {
        try {
            $this->setResult($resultGetAppointment = $this->getSoapClient()->__soapCall('GetAppointment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAppointment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\GetAppointmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
