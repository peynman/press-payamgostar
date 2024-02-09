<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindPaymentByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByNumberResponse|bool
     */
    public function FindPaymentByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByNumber $parameters)
    {
        try {
            $this->setResult($resultFindPaymentByNumber = $this->getSoapClient()->__soapCall('FindPaymentByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPaymentByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindReceiptByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByNumberResponse|bool
     */
    public function FindReceiptByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByNumber $parameters)
    {
        try {
            $this->setResult($resultFindReceiptByNumber = $this->getSoapClient()->__soapCall('FindReceiptByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindReceiptByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindPaymentById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByIdResponse|bool
     */
    public function FindPaymentById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentById $parameters)
    {
        try {
            $this->setResult($resultFindPaymentById = $this->getSoapClient()->__soapCall('FindPaymentById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPaymentById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindReceiptById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByIdResponse|bool
     */
    public function FindReceiptById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptById $parameters)
    {
        try {
            $this->setResult($resultFindReceiptById = $this->getSoapClient()->__soapCall('FindReceiptById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindReceiptById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByNumberResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
