<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends BaseServiceApi
{
    /**
     * Method to call the operation originally named UpdateTelephonyPassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPassword $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPasswordResponse|bool
     */
    public function UpdateTelephonyPassword(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPassword $parameters)
    {
        try {
            $this->setResult($resultUpdateTelephonyPassword = $this->getSoapClient()->__soapCall('UpdateTelephonyPassword', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateTelephonyPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPasswordResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
