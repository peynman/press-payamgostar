<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserByExtensionResponse StructType
 * @subpackage Structs
 */
class GetUserByExtensionResponse extends AbstractStructBase
{
    /**
     * The GetUserByExtensionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $GetUserByExtensionResult = null;
    /**
     * Constructor method for GetUserByExtensionResponse
     * @uses GetUserByExtensionResponse::setGetUserByExtensionResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByExtensionResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByExtensionResult = null)
    {
        $this
            ->setGetUserByExtensionResult($getUserByExtensionResult);
    }
    /**
     * Get GetUserByExtensionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    public function getGetUserByExtensionResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
    {
        return $this->GetUserByExtensionResult ?? null;
    }
    /**
     * Set GetUserByExtensionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByExtensionResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtensionResponse
     */
    public function setGetUserByExtensionResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByExtensionResult = null): self
    {
        if (is_null($getUserByExtensionResult) || (is_array($getUserByExtensionResult) && empty($getUserByExtensionResult))) {
            unset($this->GetUserByExtensionResult);
        } else {
            $this->GetUserByExtensionResult = $getUserByExtensionResult;
        }
        
        return $this;
    }
}
