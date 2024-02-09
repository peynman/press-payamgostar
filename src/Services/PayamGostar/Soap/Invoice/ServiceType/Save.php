<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveInvoice $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveInvoiceResponse|bool
     */
    public function SaveInvoice(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveInvoice $parameters)
    {
        try {
            $this->setResult($resultSaveInvoice = $this->getSoapClient()->__soapCall('SaveInvoice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveReturnInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoice $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoiceResponse|bool
     */
    public function SaveReturnInvoice(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoice $parameters)
    {
        try {
            $this->setResult($resultSaveReturnInvoice = $this->getSoapClient()->__soapCall('SaveReturnInvoice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReturnInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveInvoiceResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoiceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
