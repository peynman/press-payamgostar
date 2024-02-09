<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserHelperExtensionByResponse StructType
 * @subpackage Structs
 */
class GetUserHelperExtensionByResponse extends AbstractStructBase
{
    /**
     * The GetUserHelperExtensionByResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo $GetUserHelperExtensionByResult = null;
    /**
     * Constructor method for GetUserHelperExtensionByResponse
     * @uses GetUserHelperExtensionByResponse::setGetUserHelperExtensionByResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo $getUserHelperExtensionByResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo $getUserHelperExtensionByResult = null)
    {
        $this
            ->setGetUserHelperExtensionByResult($getUserHelperExtensionByResult);
    }
    /**
     * Get GetUserHelperExtensionByResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo|null
     */
    public function getGetUserHelperExtensionByResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo
    {
        return $this->GetUserHelperExtensionByResult ?? null;
    }
    /**
     * Set GetUserHelperExtensionByResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo $getUserHelperExtensionByResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserHelperExtensionByResponse
     */
    public function setGetUserHelperExtensionByResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo $getUserHelperExtensionByResult = null): self
    {
        if (is_null($getUserHelperExtensionByResult) || (is_array($getUserHelperExtensionByResult) && empty($getUserHelperExtensionByResult))) {
            unset($this->GetUserHelperExtensionByResult);
        } else {
            $this->GetUserHelperExtensionByResult = $getUserHelperExtensionByResult;
        }
        
        return $this;
    }
}
