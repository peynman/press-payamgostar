<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pending ServiceType
 * @subpackage Services
 */
class Pending extends BaseServiceApi
{
    /**
     * Method to call the operation originally named Pending
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Pending $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\PendingResponse|bool
     */
    public function Pending(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Pending $parameters)
    {
        try {
            $this->setResult($resultPending = $this->getSoapClient()->__soapCall('Pending', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPending;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\PendingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
