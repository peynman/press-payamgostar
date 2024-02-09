<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveForm
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveForm $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveFormResponse|bool
     */
    public function SaveForm(\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveForm $parameters)
    {
        try {
            $this->setResult($resultSaveForm = $this->getSoapClient()->__soapCall('SaveForm', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveForm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveFormResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
