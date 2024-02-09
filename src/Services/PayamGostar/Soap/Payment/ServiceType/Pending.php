<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pending ServiceType
 * @subpackage Services
 */
class Pending extends BaseServiceApi
{
    /**
     * Method to call the operation originally named PendingPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PendingPayment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PendingPaymentResponse|bool
     */
    public function PendingPayment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PendingPayment $parameters)
    {
        try {
            $this->setResult($resultPendingPayment = $this->getSoapClient()->__soapCall('PendingPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPendingPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PendingPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
