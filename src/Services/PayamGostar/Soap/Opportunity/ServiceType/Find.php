<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindOpportunityById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\FindOpportunityById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\FindOpportunityByIdResponse|bool
     */
    public function FindOpportunityById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\FindOpportunityById $parameters)
    {
        try {
            $this->setResult($resultFindOpportunityById = $this->getSoapClient()->__soapCall('FindOpportunityById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindOpportunityById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\FindOpportunityByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
