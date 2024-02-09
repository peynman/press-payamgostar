<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveTask $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveTaskResponse|bool
     */
    public function SaveTask(\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveTask $parameters)
    {
        try {
            $this->setResult($resultSaveTask = $this->getSoapClient()->__soapCall('SaveTask', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
