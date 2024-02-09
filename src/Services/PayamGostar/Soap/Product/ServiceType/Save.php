<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveProduct
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProduct $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductResponse|bool
     */
    public function SaveProduct(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProduct $parameters)
    {
        try {
            $this->setResult($resultSaveProduct = $this->getSoapClient()->__soapCall('SaveProduct', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveProduct;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveProductGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroup $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResponse|bool
     */
    public function SaveProductGroup(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroup $parameters)
    {
        try {
            $this->setResult($resultSaveProductGroup = $this->getSoapClient()->__soapCall('SaveProductGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveProductGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
