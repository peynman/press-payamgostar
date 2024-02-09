<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserListResponse StructType
 * @subpackage Structs
 */
class GetUserListResponse extends AbstractStructBase
{
    /**
     * The GetUserListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult $GetUserListResult = null;
    /**
     * Constructor method for GetUserListResponse
     * @uses GetUserListResponse::setGetUserListResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult $getUserListResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult $getUserListResult = null)
    {
        $this
            ->setGetUserListResult($getUserListResult);
    }
    /**
     * Get GetUserListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult|null
     */
    public function getGetUserListResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult
    {
        return $this->GetUserListResult ?? null;
    }
    /**
     * Set GetUserListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult $getUserListResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserListResponse
     */
    public function setGetUserListResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult $getUserListResult = null): self
    {
        if (is_null($getUserListResult) || (is_array($getUserListResult) && empty($getUserListResult))) {
            unset($this->GetUserListResult);
        } else {
            $this->GetUserListResult = $getUserListResult;
        }
        
        return $this;
    }
}
