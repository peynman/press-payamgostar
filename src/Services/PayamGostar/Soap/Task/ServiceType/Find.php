<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindTaskById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\FindTaskById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\FindTaskByIdResponse|bool
     */
    public function FindTaskById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\FindTaskById $parameters)
    {
        try {
            $this->setResult($resultFindTaskById = $this->getSoapClient()->__soapCall('FindTaskById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindTaskById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\FindTaskByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
