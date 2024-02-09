<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveBusinessNote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\SaveBusinessNote $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\SaveBusinessNoteResponse|bool
     */
    public function SaveBusinessNote(\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\SaveBusinessNote $parameters)
    {
        try {
            $this->setResult($resultSaveBusinessNote = $this->getSoapClient()->__soapCall('SaveBusinessNote', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBusinessNote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\SaveBusinessNoteResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
