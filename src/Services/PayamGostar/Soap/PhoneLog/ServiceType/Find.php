<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindPhoneLogById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\FindPhoneLogById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\FindPhoneLogByIdResponse|bool
     */
    public function FindPhoneLogById(\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\FindPhoneLogById $parameters)
    {
        try {
            $this->setResult($resultFindPhoneLogById = $this->getSoapClient()->__soapCall('FindPhoneLogById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPhoneLogById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\FindPhoneLogByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
