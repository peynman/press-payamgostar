<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseServiceApi
{
    /**
     * Method to call the operation originally named DeleteContractById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\DeleteContractById $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\DeleteContractByIdResponse|bool
     */
    public function DeleteContractById(\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\DeleteContractById $parameters)
    {
        try {
            $this->setResult($resultDeleteContractById = $this->getSoapClient()->__soapCall('DeleteContractById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteContractById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\DeleteContractByIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
