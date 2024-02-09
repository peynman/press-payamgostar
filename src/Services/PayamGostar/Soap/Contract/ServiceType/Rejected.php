<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rejected ServiceType
 * @subpackage Services
 */
class Rejected extends BaseServiceApi
{
    /**
     * Method to call the operation originally named RejectedContract
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\RejectedContract $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\RejectedContractResponse|bool
     */
    public function RejectedContract(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\RejectedContract $parameters)
    {
        try {
            $this->setResult($resultRejectedContract = $this->getSoapClient()->__soapCall('RejectedContract', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRejectedContract;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\RejectedContractResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
