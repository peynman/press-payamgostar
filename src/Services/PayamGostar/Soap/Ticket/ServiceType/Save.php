<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ServiceType;

use SoapFault;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveTicketHistory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistoryResponse|bool
     */
    public function SaveTicketHistory(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory $parameters)
    {
        try {
            $this->setResult($resultSaveTicketHistory = $this->getSoapClient()->__soapCall('SaveTicketHistory', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTicketHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
