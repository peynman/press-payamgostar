<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindIdentityById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByIdResponse|bool
     */
    public function FindIdentityById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityById $parameters)
    {
        try {
            $this->setResult($resultFindIdentityById = $this->getSoapClient()->__soapCall('FindIdentityById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindIdentityById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FindIdentityByPhoneNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByPhoneNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByPhoneNumberResponse|bool
     */
    public function FindIdentityByPhoneNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByPhoneNumber $parameters)
    {
        try {
            $this->setResult($resultFindIdentityByPhoneNumber = $this->getSoapClient()->__soapCall('FindIdentityByPhoneNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindIdentityByPhoneNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByPhoneNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
