<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OperationResult
 * @subpackage Structs
 */
class OperationResult extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Success = null;
    /**
     * Constructor method for OperationResult
     * @uses OperationResult::setMessage()
     * @uses OperationResult::setSuccess()
     * @param string $message
     * @param bool $success
     */
    public function __construct(?string $message = null, ?bool $success = null)
    {
        $this
            ->setMessage($message)
            ->setSuccess($success);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message ?? null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\OperationResult
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        
        return $this;
    }
    /**
     * Get Success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\OperationResult
     */
    public function setSuccess(?bool $success = null): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        
        return $this;
    }
}
