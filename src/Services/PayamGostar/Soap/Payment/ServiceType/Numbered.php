<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Numbered ServiceType
 * @subpackage Services
 */
class Numbered extends BaseServiceApi
{
    /**
     * Method to call the operation originally named NumberedPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\NumberedPayment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\NumberedPaymentResponse|bool
     */
    public function NumberedPayment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\NumberedPayment $parameters)
    {
        try {
            $this->setResult($resultNumberedPayment = $this->getSoapClient()->__soapCall('NumberedPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultNumberedPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\NumberedPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
