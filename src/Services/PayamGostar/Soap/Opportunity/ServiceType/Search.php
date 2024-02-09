<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchOpportunity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SearchOpportunity $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SearchOpportunityResponse|bool
     */
    public function SearchOpportunity(\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SearchOpportunity $parameters)
    {
        try {
            $this->setResult($resultSearchOpportunity = $this->getSoapClient()->__soapCall('SearchOpportunity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchOpportunity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SearchOpportunityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
