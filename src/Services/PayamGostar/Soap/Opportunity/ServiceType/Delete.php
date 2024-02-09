<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteOpportunityById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\DeleteOpportunityById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\DeleteOpportunityByIdResponse|bool
     */
    public function DeleteOpportunityById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\DeleteOpportunityById $parameters)
    {
        try {
            $this->setResult($resultDeleteOpportunityById = $this->getSoapClient()->__soapCall('DeleteOpportunityById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOpportunityById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\DeleteOpportunityByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
