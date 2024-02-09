<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchAppointment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SearchAppointment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SearchAppointmentResponse|bool
     */
    public function SearchAppointment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SearchAppointment $parameters)
    {
        try {
            $this->setResult($resultSearchAppointment = $this->getSoapClient()->__soapCall('SearchAppointment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAppointment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\SearchAppointmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
