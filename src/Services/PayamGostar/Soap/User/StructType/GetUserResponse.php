<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponse StructType
 * @subpackage Structs
 */
class GetUserResponse extends AbstractStructBase
{
    /**
     * The GetUserResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $GetUserResult = null;
    /**
     * Constructor method for GetUserResponse
     * @uses GetUserResponse::setGetUserResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserResult = null)
    {
        $this
            ->setGetUserResult($getUserResult);
    }
    /**
     * Get GetUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    public function getGetUserResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
    {
        return $this->GetUserResult ?? null;
    }
    /**
     * Set GetUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserResponse
     */
    public function setGetUserResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserResult = null): self
    {
        if (is_null($getUserResult) || (is_array($getUserResult) && empty($getUserResult))) {
            unset($this->GetUserResult);
        } else {
            $this->GetUserResult = $getUserResult;
        }
        
        return $this;
    }
}
