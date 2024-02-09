<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveOpportunity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveOpportunity $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveOpportunityResponse|bool
     */
    public function SaveOpportunity(\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveOpportunity $parameters)
    {
        try {
            $this->setResult($resultSaveOpportunity = $this->getSoapClient()->__soapCall('SaveOpportunity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOpportunity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveOpportunityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
