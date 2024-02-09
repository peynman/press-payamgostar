<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends BaseServiceApi
{
    /**
     * Method to call the operation originally named FindPersonById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\FindPersonById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\FindPersonByIdResponse|bool
     */
    public function FindPersonById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\FindPersonById $parameters)
    {
        try {
            $this->setResult($resultFindPersonById = $this->getSoapClient()->__soapCall('FindPersonById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPersonById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\FindPersonByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
