<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Numbered ServiceType
 * @subpackage Services
 */
class Numbered extends BaseServiceApi
{
    /**
     * Method to call the operation originally named Numbered
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Numbered $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\NumberedResponse|bool
     */
    public function Numbered(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Numbered $parameters)
    {
        try {
            $this->setResult($resultNumbered = $this->getSoapClient()->__soapCall('Numbered', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultNumbered;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\NumberedResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
