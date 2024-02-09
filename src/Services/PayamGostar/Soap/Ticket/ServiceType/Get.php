<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ServiceType;

use SoapFault;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetHistoryByTicketId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetHistoryByTicketId $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetHistoryByTicketIdResponse|bool
     */
    public function GetHistoryByTicketId(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetHistoryByTicketId $parameters)
    {
        try {
            $this->setResult($resultGetHistoryByTicketId = $this->getSoapClient()->__soapCall('GetHistoryByTicketId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHistoryByTicketId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTicketFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetTicketFile $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetTicketFileResponse|bool
     */
    public function GetTicketFile(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetTicketFile $parameters)
    {
        try {
            $this->setResult($resultGetTicketFile = $this->getSoapClient()->__soapCall('GetTicketFile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTicketFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetHistoryByTicketIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\GetTicketFileResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
