<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserExtensionsResponse StructType
 * @subpackage Structs
 */
class GetUserExtensionsResponse extends AbstractStructBase
{
    /**
     * The GetUserExtensionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo $GetUserExtensionsResult = null;
    /**
     * Constructor method for GetUserExtensionsResponse
     * @uses GetUserExtensionsResponse::setGetUserExtensionsResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo $getUserExtensionsResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo $getUserExtensionsResult = null)
    {
        $this
            ->setGetUserExtensionsResult($getUserExtensionsResult);
    }
    /**
     * Get GetUserExtensionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo|null
     */
    public function getGetUserExtensionsResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo
    {
        return $this->GetUserExtensionsResult ?? null;
    }
    /**
     * Set GetUserExtensionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo $getUserExtensionsResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensionsResponse
     */
    public function setGetUserExtensionsResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo $getUserExtensionsResult = null): self
    {
        if (is_null($getUserExtensionsResult) || (is_array($getUserExtensionsResult) && empty($getUserExtensionsResult))) {
            unset($this->GetUserExtensionsResult);
        } else {
            $this->GetUserExtensionsResult = $getUserExtensionsResult;
        }
        
        return $this;
    }
}
