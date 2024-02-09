<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseServiceApi
{
    /**
     * Method to call the operation originally named GetUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUser $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserResponse|bool
     */
    public function GetUser(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUser $parameters)
    {
        try {
            $this->setResult($resultGetUser = $this->getSoapClient()->__soapCall('GetUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserByExtension
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtension $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtensionResponse|bool
     */
    public function GetUserByExtension(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtension $parameters)
    {
        try {
            $this->setResult($resultGetUserByExtension = $this->getSoapClient()->__soapCall('GetUserByExtension', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserByExtension;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserByIdentityId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByIdentityId $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByIdentityIdResponse|bool
     */
    public function GetUserByIdentityId(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByIdentityId $parameters)
    {
        try {
            $this->setResult($resultGetUserByIdentityId = $this->getSoapClient()->__soapCall('GetUserByIdentityId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserByIdentityId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserExtensions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensions $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensionsResponse|bool
     */
    public function GetUserExtensions(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensions $parameters)
    {
        try {
            $this->setResult($resultGetUserExtensions = $this->getSoapClient()->__soapCall('GetUserExtensions', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserExtensions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserHelperExtensionBy
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserHelperExtensionBy $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserHelperExtensionByResponse|bool
     */
    public function GetUserHelperExtensionBy(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserHelperExtensionBy $parameters)
    {
        try {
            $this->setResult($resultGetUserHelperExtensionBy = $this->getSoapClient()->__soapCall('GetUserHelperExtensionBy', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserHelperExtensionBy;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserList $parameters
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserListResponse|bool
     */
    public function GetUserList(\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserList $parameters)
    {
        try {
            $this->setResult($resultGetUserList = $this->getSoapClient()->__soapCall('GetUserList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtensionResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByIdentityIdResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensionsResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserHelperExtensionByResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserListResponse|\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
