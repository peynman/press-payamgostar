<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindOrganizationById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\FindOrganizationById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\FindOrganizationByIdResponse|bool
     */
    public function FindOrganizationById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\FindOrganizationById $parameters)
    {
        try {
            $this->setResult($resultFindOrganizationById = $this->getSoapClient()->__soapCall('FindOrganizationById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindOrganizationById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\FindOrganizationByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
