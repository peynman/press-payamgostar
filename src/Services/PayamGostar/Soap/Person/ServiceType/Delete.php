<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeletePersonById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\DeletePersonById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\DeletePersonByIdResponse|bool
     */
    public function DeletePersonById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\DeletePersonById $parameters)
    {
        try {
            $this->setResult($resultDeletePersonById = $this->getSoapClient()->__soapCall('DeletePersonById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\DeletePersonByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
