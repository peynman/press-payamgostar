<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeletePaymentById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByIdResponse|bool
     */
    public function DeletePaymentById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentById $parameters)
    {
        try {
            $this->setResult($resultDeletePaymentById = $this->getSoapClient()->__soapCall('DeletePaymentById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePaymentById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeletePaymentByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByNumberResponse|bool
     */
    public function DeletePaymentByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByNumber $parameters)
    {
        try {
            $this->setResult($resultDeletePaymentByNumber = $this->getSoapClient()->__soapCall('DeletePaymentByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePaymentByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteReceiptByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeleteReceiptByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeleteReceiptByNumberResponse|bool
     */
    public function DeleteReceiptByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeleteReceiptByNumber $parameters)
    {
        try {
            $this->setResult($resultDeleteReceiptByNumber = $this->getSoapClient()->__soapCall('DeleteReceiptByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReceiptByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByNumberResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeleteReceiptByNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
