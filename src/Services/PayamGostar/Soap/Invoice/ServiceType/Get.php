<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetInvoicesByIdentityId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\GetInvoicesByIdentityId $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\GetInvoicesByIdentityIdResponse|bool
     */
    public function GetInvoicesByIdentityId(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\GetInvoicesByIdentityId $parameters)
    {
        try {
            $this->setResult($resultGetInvoicesByIdentityId = $this->getSoapClient()->__soapCall('GetInvoicesByIdentityId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInvoicesByIdentityId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\GetInvoicesByIdentityIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
