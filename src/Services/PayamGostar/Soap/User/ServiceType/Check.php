<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends BaseServiceApi
{
    /**
     * Method to call the operation originally named CheckUserAuthentication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\CheckUserAuthentication $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\CheckUserAuthenticationResponse|bool
     */
    public function CheckUserAuthentication(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\CheckUserAuthentication $parameters)
    {
        try {
            $this->setResult($resultCheckUserAuthentication = $this->getSoapClient()->__soapCall('CheckUserAuthentication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckUserAuthentication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\CheckUserAuthenticationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
