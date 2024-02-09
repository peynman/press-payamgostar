<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindAppointmentById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\FindAppointmentById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\FindAppointmentByIdResponse|bool
     */
    public function FindAppointmentById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\FindAppointmentById $parameters)
    {
        try {
            $this->setResult($resultFindAppointmentById = $this->getSoapClient()->__soapCall('FindAppointmentById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindAppointmentById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\FindAppointmentByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
