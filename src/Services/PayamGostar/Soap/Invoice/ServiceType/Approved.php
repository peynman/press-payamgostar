<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Approved ServiceType
 * @subpackage Services
 */
class Approved extends BaseServiceApi
{
    /**
     * Method to call the operation originally named Approved
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Approved $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ApprovedResponse|bool
     */
    public function Approved(\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\Approved $parameters)
    {
        try {
            $this->setResult($resultApproved = $this->getSoapClient()->__soapCall('Approved', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultApproved;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ApprovedResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
