<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rejected ServiceType
 * @subpackage Services
 */
class Rejected extends BaseServiceApi
{
    /**
     * Method to call the operation originally named RejectedPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RejectedPayment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RejectedPaymentResponse|bool
     */
    public function RejectedPayment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RejectedPayment $parameters)
    {
        try {
            $this->setResult($resultRejectedPayment = $this->getSoapClient()->__soapCall('RejectedPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRejectedPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RejectedPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
