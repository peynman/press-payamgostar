<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SavePerson
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SavePerson $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SavePersonResponse|bool
     */
    public function SavePerson(\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SavePerson $parameters)
    {
        try {
            $this->setResult($resultSavePerson = $this->getSoapClient()->__soapCall('SavePerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SavePersonResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
