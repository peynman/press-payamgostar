<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindContractById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\FindContractById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\FindContractByIdResponse|bool
     */
    public function FindContractById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\FindContractById $parameters)
    {
        try {
            $this->setResult($resultFindContractById = $this->getSoapClient()->__soapCall('FindContractById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindContractById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\FindContractByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
