<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchForm
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SearchForm $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SearchFormResponse|bool
     */
    public function SearchForm(\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SearchForm $parameters)
    {
        try {
            $this->setResult($resultSearchForm = $this->getSoapClient()->__soapCall('SearchForm', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchForm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SearchFormResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
