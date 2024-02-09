<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteTaskById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\DeleteTaskById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\DeleteTaskByIdResponse|bool
     */
    public function DeleteTaskById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\DeleteTaskById $parameters)
    {
        try {
            $this->setResult($resultDeleteTaskById = $this->getSoapClient()->__soapCall('DeleteTaskById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTaskById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\DeleteTaskByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
