<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Approved ServiceType
 * @subpackage Services
 */
class Approved extends BaseServiceApi
{
    /**
     * Method to call the operation originally named ApprovedContract
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ApprovedContract $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ApprovedContractResponse|bool
     */
    public function ApprovedContract(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ApprovedContract $parameters)
    {
        try {
            $this->setResult($resultApprovedContract = $this->getSoapClient()->__soapCall('ApprovedContract', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultApprovedContract;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ApprovedContractResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
