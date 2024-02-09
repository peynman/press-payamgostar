<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ServiceType;

use SoapFault;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SearchTicket $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SearchTicketResponse|bool
     */
    public function SearchTicket(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SearchTicket $parameters)
    {
        try {
            $this->setResult($resultSearchTicket = $this->getSoapClient()->__soapCall('SearchTicket', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchTicket;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SearchTicketResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
