<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Approved ServiceType
 * @subpackage Services
 */
class Approved extends BaseServiceApi
{
    /**
     * Method to call the operation originally named ApprovedPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\ApprovedPayment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\ApprovedPaymentResponse|bool
     */
    public function ApprovedPayment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\ApprovedPayment $parameters)
    {
        try {
            $this->setResult($resultApprovedPayment = $this->getSoapClient()->__soapCall('ApprovedPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultApprovedPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\ApprovedPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
