<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteAppointmentById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\DeleteAppointmentById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\DeleteAppointmentByIdResponse|bool
     */
    public function DeleteAppointmentById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\DeleteAppointmentById $parameters)
    {
        try {
            $this->setResult($resultDeleteAppointmentById = $this->getSoapClient()->__soapCall('DeleteAppointmentById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAppointmentById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\DeleteAppointmentByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
