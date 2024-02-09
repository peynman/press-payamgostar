<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetRemainingStock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\GetRemainingStock $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\GetRemainingStockResponse|bool
     */
    public function GetRemainingStock(\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\GetRemainingStock $parameters)
    {
        try {
            $this->setResult($resultGetRemainingStock = $this->getSoapClient()->__soapCall('GetRemainingStock', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemainingStock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\GetRemainingStockResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
