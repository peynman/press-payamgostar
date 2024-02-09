<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetBusinessNote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\GetBusinessNote $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\GetBusinessNoteResponse|bool
     */
    public function GetBusinessNote(\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\GetBusinessNote $parameters)
    {
        try {
            $this->setResult($resultGetBusinessNote = $this->getSoapClient()->__soapCall('GetBusinessNote', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBusinessNote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\GetBusinessNoteResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
