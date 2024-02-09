<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchInvoice $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchInvoiceResponse|bool
     */
    public function SearchInvoice(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchInvoice $parameters)
    {
        try {
            $this->setResult($resultSearchInvoice = $this->getSoapClient()->__soapCall('SearchInvoice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchQuote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchQuote $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchQuoteResponse|bool
     */
    public function SearchQuote(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchQuote $parameters)
    {
        try {
            $this->setResult($resultSearchQuote = $this->getSoapClient()->__soapCall('SearchQuote', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchQuote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchPurchaseInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseInvoice $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseInvoiceResponse|bool
     */
    public function SearchPurchaseInvoice(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseInvoice $parameters)
    {
        try {
            $this->setResult($resultSearchPurchaseInvoice = $this->getSoapClient()->__soapCall('SearchPurchaseInvoice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPurchaseInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchReturnPurchaseInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoice $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoiceResponse|bool
     */
    public function SearchReturnPurchaseInvoice(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoice $parameters)
    {
        try {
            $this->setResult($resultSearchReturnPurchaseInvoice = $this->getSoapClient()->__soapCall('SearchReturnPurchaseInvoice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchReturnPurchaseInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchReturnSaleInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnSaleInvoice $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnSaleInvoiceResponse|bool
     */
    public function SearchReturnSaleInvoice(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnSaleInvoice $parameters)
    {
        try {
            $this->setResult($resultSearchReturnSaleInvoice = $this->getSoapClient()->__soapCall('SearchReturnSaleInvoice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchReturnSaleInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchPurchaseQuote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseQuote $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseQuoteResponse|bool
     */
    public function SearchPurchaseQuote(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseQuote $parameters)
    {
        try {
            $this->setResult($resultSearchPurchaseQuote = $this->getSoapClient()->__soapCall('SearchPurchaseQuote', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPurchaseQuote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchInvoiceResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseInvoiceResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseQuoteResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchQuoteResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoiceResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnSaleInvoiceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
