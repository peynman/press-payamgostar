<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeletePhoneLogById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\DeletePhoneLogById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\DeletePhoneLogByIdResponse|bool
     */
    public function DeletePhoneLogById(\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\DeletePhoneLogById $parameters)
    {
        try {
            $this->setResult($resultDeletePhoneLogById = $this->getSoapClient()->__soapCall('DeletePhoneLogById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePhoneLogById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\DeletePhoneLogByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
