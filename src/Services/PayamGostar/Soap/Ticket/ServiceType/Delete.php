<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteTicketById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketByIdResponse|bool
     */
    public function DeleteTicketById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketById $parameters)
    {
        try {
            $this->setResult($resultDeleteTicketById = $this->getSoapClient()->__soapCall('DeleteTicketById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTicketById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
