<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindProductByCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByCode $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByCodeResponse|bool
     */
    public function FindProductByCode(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByCode $parameters)
    {
        try {
            $this->setResult($resultFindProductByCode = $this->getSoapClient()->__soapCall('FindProductByCode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindProductByCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindProductByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByName $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByNameResponse|bool
     */
    public function FindProductByName(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByName $parameters)
    {
        try {
            $this->setResult($resultFindProductByName = $this->getSoapClient()->__soapCall('FindProductByName', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindProductByName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindProductItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItem $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItemResponse|bool
     */
    public function FindProductItem(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItem $parameters)
    {
        try {
            $this->setResult($resultFindProductItem = $this->getSoapClient()->__soapCall('FindProductItem', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindProductItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindProductGroupById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductGroupById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductGroupByIdResponse|bool
     */
    public function FindProductGroupById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductGroupById $parameters)
    {
        try {
            $this->setResult($resultFindProductGroupById = $this->getSoapClient()->__soapCall('FindProductGroupById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindProductGroupById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindProductById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByIdResponse|bool
     */
    public function FindProductById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductById $parameters)
    {
        try {
            $this->setResult($resultFindProductById = $this->getSoapClient()->__soapCall('FindProductById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindProductById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByCodeResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByNameResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductGroupByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItemResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
