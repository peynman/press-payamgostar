<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveIdentity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentity $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentityResponse|bool
     */
    public function SaveIdentity(\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentity $parameters)
    {
        try {
            $this->setResult($resultSaveIdentity = $this->getSoapClient()->__soapCall('SaveIdentity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveIdentity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
