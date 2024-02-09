<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SearchTask $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SearchTaskResponse|bool
     */
    public function SearchTask(\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SearchTask $parameters)
    {
        try {
            $this->setResult($resultSearchTask = $this->getSoapClient()->__soapCall('SearchTask', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SearchTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
