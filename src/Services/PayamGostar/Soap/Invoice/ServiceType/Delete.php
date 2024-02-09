<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteInvoiceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByIdResponse|bool
     */
    public function DeleteInvoiceById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceById $parameters)
    {
        try {
            $this->setResult($resultDeleteInvoiceById = $this->getSoapClient()->__soapCall('DeleteInvoiceById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteInvoiceById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteInvoiceByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumberResponse|bool
     */
    public function DeleteInvoiceByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumber $parameters)
    {
        try {
            $this->setResult($resultDeleteInvoiceByNumber = $this->getSoapClient()->__soapCall('DeleteInvoiceByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteInvoiceByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteReturnInvoiceByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteReturnInvoiceByNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteReturnInvoiceByNumberResponse|bool
     */
    public function DeleteReturnInvoiceByNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteReturnInvoiceByNumber $parameters)
    {
        try {
            $this->setResult($resultDeleteReturnInvoiceByNumber = $this->getSoapClient()->__soapCall('DeleteReturnInvoiceByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReturnInvoiceByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumberResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteReturnInvoiceByNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
