<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckUserAuthenticationResponse StructType
 * @subpackage Structs
 */
class CheckUserAuthenticationResponse extends AbstractStructBase
{
    /**
     * The CheckUserAuthenticationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CheckUserAuthenticationResult = null;
    /**
     * Constructor method for CheckUserAuthenticationResponse
     * @uses CheckUserAuthenticationResponse::setCheckUserAuthenticationResult()
     * @param bool $checkUserAuthenticationResult
     */
    public function __construct(?bool $checkUserAuthenticationResult = null)
    {
        $this
            ->setCheckUserAuthenticationResult($checkUserAuthenticationResult);
    }
    /**
     * Get CheckUserAuthenticationResult value
     * @return bool|null
     */
    public function getCheckUserAuthenticationResult(): ?bool
    {
        return $this->CheckUserAuthenticationResult;
    }
    /**
     * Set CheckUserAuthenticationResult value
     * @param bool $checkUserAuthenticationResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\CheckUserAuthenticationResponse
     */
    public function setCheckUserAuthenticationResult(?bool $checkUserAuthenticationResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkUserAuthenticationResult) && !is_bool($checkUserAuthenticationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkUserAuthenticationResult, true), gettype($checkUserAuthenticationResult)), __LINE__);
        }
        $this->CheckUserAuthenticationResult = $checkUserAuthenticationResult;
        
        return $this;
    }
}
