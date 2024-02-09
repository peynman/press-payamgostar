<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeletePriceList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\DeletePriceList $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\DeletePriceListResponse|bool
     */
    public function DeletePriceList(\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\DeletePriceList $parameters)
    {
        try {
            $this->setResult($resultDeletePriceList = $this->getSoapClient()->__soapCall('DeletePriceList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePriceList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\DeletePriceListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
