<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchContract
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SearchContract $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SearchContractResponse|bool
     */
    public function SearchContract(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SearchContract $parameters)
    {
        try {
            $this->setResult($resultSearchContract = $this->getSoapClient()->__soapCall('SearchContract', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchContract;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SearchContractResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
