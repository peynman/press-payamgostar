<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindInvoiceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByIdResponse|bool
     */
    public function FindInvoiceById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceById $parameters)
    {
        try {
            $this->setResult($resultFindInvoiceById = $this->getSoapClient()->__soapCall('FindInvoiceById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindInvoiceById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindPurchaseInvoiceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseInvoiceById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseInvoiceByIdResponse|bool
     */
    public function FindPurchaseInvoiceById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseInvoiceById $parameters)
    {
        try {
            $this->setResult($resultFindPurchaseInvoiceById = $this->getSoapClient()->__soapCall('FindPurchaseInvoiceById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPurchaseInvoiceById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindReturnPurchaseInvoiceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceByIdResponse|bool
     */
    public function FindReturnPurchaseInvoiceById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceById $parameters)
    {
        try {
            $this->setResult($resultFindReturnPurchaseInvoiceById = $this->getSoapClient()->__soapCall('FindReturnPurchaseInvoiceById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindReturnPurchaseInvoiceById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindQuoteById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindQuoteById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindQuoteByIdResponse|bool
     */
    public function FindQuoteById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindQuoteById $parameters)
    {
        try {
            $this->setResult($resultFindQuoteById = $this->getSoapClient()->__soapCall('FindQuoteById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindQuoteById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindPurchaseQuoteById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseQuoteById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseQuoteByIdResponse|bool
     */
    public function FindPurchaseQuoteById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseQuoteById $parameters)
    {
        try {
            $this->setResult($resultFindPurchaseQuoteById = $this->getSoapClient()->__soapCall('FindPurchaseQuoteById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPurchaseQuoteById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindReturnInvoiceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByIdResponse|bool
     */
    public function FindReturnInvoiceById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceById $parameters)
    {
        try {
            $this->setResult($resultFindReturnInvoiceById = $this->getSoapClient()->__soapCall('FindReturnInvoiceById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindReturnInvoiceById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindInvoiceByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumberResponse|bool
     */
    public function FindInvoiceByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumber $parameters)
    {
        try {
            $this->setResult($resultFindInvoiceByNumber = $this->getSoapClient()->__soapCall('FindInvoiceByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindInvoiceByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindReturnInvoiceByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByNumberResponse|bool
     */
    public function FindReturnInvoiceByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByNumber $parameters)
    {
        try {
            $this->setResult($resultFindReturnInvoiceByNumber = $this->getSoapClient()->__soapCall('FindReturnInvoiceByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindReturnInvoiceByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumberResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseInvoiceByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseQuoteByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindQuoteByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByNumberResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
