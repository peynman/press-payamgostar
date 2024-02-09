<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends BaseServiceApi
{
    /**
     * Method to call the operation originally named SaveContract
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveContract $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveContractResponse|bool
     */
    public function SaveContract(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveContract $parameters)
    {
        try {
            $this->setResult($resultSaveContract = $this->getSoapClient()->__soapCall('SaveContract', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveContract;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveContractResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
