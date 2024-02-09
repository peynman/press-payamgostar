<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ServiceType;

use SoapFault;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindTicketById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FindTicketById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FindTicketByIdResponse|bool
     */
    public function FindTicketById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FindTicketById $parameters)
    {
        try {
            $this->setResult($resultFindTicketById = $this->getSoapClient()->__soapCall('FindTicketById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindTicketById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FindTicketByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
