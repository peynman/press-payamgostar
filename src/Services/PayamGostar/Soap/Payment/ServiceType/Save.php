<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SavePayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePayment $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePaymentResponse|bool
     */
    public function SavePayment(\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePayment $parameters)
    {
        try {
            $this->setResult($resultSavePayment = $this->getSoapClient()->__soapCall('SavePayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
