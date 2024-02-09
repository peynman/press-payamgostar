<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends BaseServiceApi
{
    /**
     * Method to call the operation originally named CreatePaymentLink
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLink $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLinkResponse|bool
     */
    public function CreatePaymentLink(\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLink $parameters)
    {
        try {
            $this->setResult($resultCreatePaymentLink = $this->getSoapClient()->__soapCall('CreatePaymentLink', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePaymentLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLinkResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
