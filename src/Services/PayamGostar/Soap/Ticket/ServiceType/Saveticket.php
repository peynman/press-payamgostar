<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ServiceType;

use SoapFault;

/**
 * This class stands for Saveticket ServiceType
 * @subpackage Services
 */
class Saveticket extends BaseServiceApi
{
    /**
     * Method to call the operation originally named Saveticket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\Saveticket $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveticketResponse|bool
     */
    public function Saveticket(\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\Saveticket $parameters)
    {
        try {
            $this->setResult($resultSaveticket = $this->getSoapClient()->__soapCall('Saveticket', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveticket;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveticketResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
