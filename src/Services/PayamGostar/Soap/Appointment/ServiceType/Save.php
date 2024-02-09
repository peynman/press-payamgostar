<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveAppointment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveAppointment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveAppointmentResponse|bool
     */
    public function SaveAppointment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveAppointment $parameters)
    {
        try {
            $this->setResult($resultSaveAppointment = $this->getSoapClient()->__soapCall('SaveAppointment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAppointment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SaveAppointmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
