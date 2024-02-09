<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchIdentity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SearchIdentity $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SearchIdentityResponse|bool
     */
    public function SearchIdentity(\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SearchIdentity $parameters)
    {
        try {
            $this->setResult($resultSearchIdentity = $this->getSoapClient()->__soapCall('SearchIdentity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchIdentity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SearchIdentityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
