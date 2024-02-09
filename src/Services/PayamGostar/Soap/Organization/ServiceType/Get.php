<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetOrganizationByPhoneNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\GetOrganizationByPhoneNumber $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\GetOrganizationByPhoneNumberResponse|bool
     */
    public function GetOrganizationByPhoneNumber(\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\GetOrganizationByPhoneNumber $parameters)
    {
        try {
            $this->setResult($resultGetOrganizationByPhoneNumber = $this->getSoapClient()->__soapCall('GetOrganizationByPhoneNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrganizationByPhoneNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\GetOrganizationByPhoneNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
