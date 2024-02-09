<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SearchPhoneLog
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SearchPhoneLog $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SearchPhoneLogResponse|bool
     */
    public function SearchPhoneLog(\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SearchPhoneLog $parameters)
    {
        try {
            $this->setResult($resultSearchPhoneLog = $this->getSoapClient()->__soapCall('SearchPhoneLog', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPhoneLog;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SearchPhoneLogResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
