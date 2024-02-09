<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserByIdentityIdResponse StructType
 * @subpackage Structs
 */
class GetUserByIdentityIdResponse extends AbstractStructBase
{
    /**
     * The GetUserByIdentityIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $GetUserByIdentityIdResult = null;
    /**
     * Constructor method for GetUserByIdentityIdResponse
     * @uses GetUserByIdentityIdResponse::setGetUserByIdentityIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByIdentityIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByIdentityIdResult = null)
    {
        $this
            ->setGetUserByIdentityIdResult($getUserByIdentityIdResult);
    }
    /**
     * Get GetUserByIdentityIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo|null
     */
    public function getGetUserByIdentityIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
    {
        return $this->GetUserByIdentityIdResult ?? null;
    }
    /**
     * Set GetUserByIdentityIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByIdentityIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByIdentityIdResponse
     */
    public function setGetUserByIdentityIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo $getUserByIdentityIdResult = null): self
    {
        if (is_null($getUserByIdentityIdResult) || (is_array($getUserByIdentityIdResult) && empty($getUserByIdentityIdResult))) {
            unset($this->GetUserByIdentityIdResult);
        } else {
            $this->GetUserByIdentityIdResult = $getUserByIdentityIdResult;
        }
        
        return $this;
    }
}
