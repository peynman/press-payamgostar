<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetProductBySerialNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\GetProductBySerialNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\GetProductBySerialNumberResponse|bool
     */
    public function GetProductBySerialNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\GetProductBySerialNumber $parameters)
    {
        try {
            $this->setResult($resultGetProductBySerialNumber = $this->getSoapClient()->__soapCall('GetProductBySerialNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductBySerialNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\GetProductBySerialNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
