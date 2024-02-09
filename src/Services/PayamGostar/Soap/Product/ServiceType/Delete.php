<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteProductById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByIdResponse|bool
     */
    public function DeleteProductById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductById $parameters)
    {
        try {
            $this->setResult($resultDeleteProductById = $this->getSoapClient()->__soapCall('DeleteProductById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProductById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteProductByCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByCode $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByCodeResponse|bool
     */
    public function DeleteProductByCode(\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByCode $parameters)
    {
        try {
            $this->setResult($resultDeleteProductByCode = $this->getSoapClient()->__soapCall('DeleteProductByCode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProductByCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByCodeResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
