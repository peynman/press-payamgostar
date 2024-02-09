<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pending ServiceType
 * @subpackage Services
 */
class Pending extends BaseServiceApi
{
    /**
     * Method to call the operation originally named PendingContract
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\PendingContract $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\PendingContractResponse|bool
     */
    public function PendingContract(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\PendingContract $parameters)
    {
        try {
            $this->setResult($resultPendingContract = $this->getSoapClient()->__soapCall('PendingContract', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPendingContract;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\PendingContractResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
