<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchOrganization
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SearchOrganization $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SearchOrganizationResponse|bool
     */
    public function SearchOrganization(\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SearchOrganization $parameters)
    {
        try {
            $this->setResult($resultSearchOrganization = $this->getSoapClient()->__soapCall('SearchOrganization', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchOrganization;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SearchOrganizationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
