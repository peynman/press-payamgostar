<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteFormById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\DeleteFormById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\DeleteFormByIdResponse|bool
     */
    public function DeleteFormById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\DeleteFormById $parameters)
    {
        try {
            $this->setResult($resultDeleteFormById = $this->getSoapClient()->__soapCall('DeleteFormById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFormById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\DeleteFormByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
