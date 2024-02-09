<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendRecoverPasswordEmailResponse StructType
 * @subpackage Structs
 */
class ResendRecoverPasswordEmailResponse extends AbstractStructBase
{
    /**
     * The ResendRecoverPasswordEmailResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ResendRecoverPasswordEmailResult = null;
    /**
     * Constructor method for ResendRecoverPasswordEmailResponse
     * @uses ResendRecoverPasswordEmailResponse::setResendRecoverPasswordEmailResult()
     * @param bool $resendRecoverPasswordEmailResult
     */
    public function __construct(?bool $resendRecoverPasswordEmailResult = null)
    {
        $this
            ->setResendRecoverPasswordEmailResult($resendRecoverPasswordEmailResult);
    }
    /**
     * Get ResendRecoverPasswordEmailResult value
     * @return bool|null
     */
    public function getResendRecoverPasswordEmailResult(): ?bool
    {
        return $this->ResendRecoverPasswordEmailResult;
    }
    /**
     * Set ResendRecoverPasswordEmailResult value
     * @param bool $resendRecoverPasswordEmailResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\ResendRecoverPasswordEmailResponse
     */
    public function setResendRecoverPasswordEmailResult(?bool $resendRecoverPasswordEmailResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($resendRecoverPasswordEmailResult) && !is_bool($resendRecoverPasswordEmailResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resendRecoverPasswordEmailResult, true), gettype($resendRecoverPasswordEmailResult)), __LINE__);
        }
        $this->ResendRecoverPasswordEmailResult = $resendRecoverPasswordEmailResult;
        
        return $this;
    }
}
