<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SavePriceList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceList $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceListResponse|bool
     */
    public function SavePriceList(\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceList $parameters)
    {
        try {
            $this->setResult($resultSavePriceList = $this->getSoapClient()->__soapCall('SavePriceList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePriceList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
