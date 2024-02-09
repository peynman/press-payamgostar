<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ServiceType;

use Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPersonResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchPerson
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPerson $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPersonResponse|bool
     */
    public function SearchPerson(\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPerson $parameters)
    {
        try {
            $this->setResult($resultSearchPerson = $this->getSoapClient()->__soapCall('SearchPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
            
            return $resultSearchPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPersonResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
