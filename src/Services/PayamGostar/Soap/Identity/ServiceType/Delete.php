<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteIdentityById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\DeleteIdentityById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\DeleteIdentityByIdResponse|bool
     */
    public function DeleteIdentityById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\DeleteIdentityById $parameters)
    {
        try {
            $this->setResult($resultDeleteIdentityById = $this->getSoapClient()->__soapCall('DeleteIdentityById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteIdentityById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\DeleteIdentityByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
