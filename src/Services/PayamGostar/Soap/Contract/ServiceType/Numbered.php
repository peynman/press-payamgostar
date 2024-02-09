<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Numbered ServiceType
 * @subpackage Services
 */
class Numbered extends BaseServiceApi
{
    /**
     * Method to call the operation originally named NumberedContract
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\NumberedContract $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\NumberedContractResponse|bool
     */
    public function NumberedContract(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\NumberedContract $parameters)
    {
        try {
            $this->setResult($resultNumberedContract = $this->getSoapClient()->__soapCall('NumberedContract', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultNumberedContract;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\NumberedContractResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
