<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveOrganization
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveOrganization $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveOrganizationResponse|bool
     */
    public function SaveOrganization(\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveOrganization $parameters)
    {
        try {
            $this->setResult($resultSaveOrganization = $this->getSoapClient()->__soapCall('SaveOrganization', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrganization;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveOrganizationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
