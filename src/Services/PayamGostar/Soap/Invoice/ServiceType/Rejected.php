<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rejected ServiceType
 * @subpackage Services
 */
class Rejected extends BaseServiceApi
{
    /**
     * Method to call the operation originally named Rejected
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Rejected $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RejectedResponse|bool
     */
    public function Rejected(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Rejected $parameters)
    {
        try {
            $this->setResult($resultRejected = $this->getSoapClient()->__soapCall('Rejected', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRejected;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RejectedResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
