<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPayment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPaymentResponse|bool
     */
    public function SearchPayment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPayment $parameters)
    {
        try {
            $this->setResult($resultSearchPayment = $this->getSoapClient()->__soapCall('SearchPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchReceipt
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchReceipt $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchReceiptResponse|bool
     */
    public function SearchReceipt(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchReceipt $parameters)
    {
        try {
            $this->setResult($resultSearchReceipt = $this->getSoapClient()->__soapCall('SearchReceipt', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPaymentResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchReceiptResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
