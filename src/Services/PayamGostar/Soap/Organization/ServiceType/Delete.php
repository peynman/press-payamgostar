<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteOrganizationById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\DeleteOrganizationById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\DeleteOrganizationByIdResponse|bool
     */
    public function DeleteOrganizationById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\DeleteOrganizationById $parameters)
    {
        try {
            $this->setResult($resultDeleteOrganizationById = $this->getSoapClient()->__soapCall('DeleteOrganizationById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrganizationById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\DeleteOrganizationByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
