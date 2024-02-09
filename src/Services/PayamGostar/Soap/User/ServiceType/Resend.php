<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Resend ServiceType
 * @subpackage Services
 */
class Resend extends BaseServiceApi
{
    /**
     * Method to call the operation originally named ResendRecoverPasswordEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\ResendRecoverPasswordEmail $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\ResendRecoverPasswordEmailResponse|bool
     */
    public function ResendRecoverPasswordEmail(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\ResendRecoverPasswordEmail $parameters)
    {
        try {
            $this->setResult($resultResendRecoverPasswordEmail = $this->getSoapClient()->__soapCall('ResendRecoverPasswordEmail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultResendRecoverPasswordEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\ResendRecoverPasswordEmailResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
