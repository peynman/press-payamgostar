<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindFormById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FindFormById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FindFormByIdResponse|bool
     */
    public function FindFormById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FindFormById $parameters)
    {
        try {
            $this->setResult($resultFindFormById = $this->getSoapClient()->__soapCall('FindFormById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindFormById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FindFormByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
