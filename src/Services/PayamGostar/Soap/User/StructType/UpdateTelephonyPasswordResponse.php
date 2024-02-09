<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTelephonyPasswordResponse StructType
 * @subpackage Structs
 */
class UpdateTelephonyPasswordResponse extends AbstractStructBase
{
    /**
     * The UpdateTelephonyPasswordResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UpdateTelephonyPasswordResult = null;
    /**
     * Constructor method for UpdateTelephonyPasswordResponse
     * @uses UpdateTelephonyPasswordResponse::setUpdateTelephonyPasswordResult()
     * @param bool $updateTelephonyPasswordResult
     */
    public function __construct(?bool $updateTelephonyPasswordResult = null)
    {
        $this
            ->setUpdateTelephonyPasswordResult($updateTelephonyPasswordResult);
    }
    /**
     * Get UpdateTelephonyPasswordResult value
     * @return bool|null
     */
    public function getUpdateTelephonyPasswordResult(): ?bool
    {
        return $this->UpdateTelephonyPasswordResult;
    }
    /**
     * Set UpdateTelephonyPasswordResult value
     * @param bool $updateTelephonyPasswordResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPasswordResponse
     */
    public function setUpdateTelephonyPasswordResult(?bool $updateTelephonyPasswordResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($updateTelephonyPasswordResult) && !is_bool($updateTelephonyPasswordResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateTelephonyPasswordResult, true), gettype($updateTelephonyPasswordResult)), __LINE__);
        }
        $this->UpdateTelephonyPasswordResult = $updateTelephonyPasswordResult;
        
        return $this;
    }
}
