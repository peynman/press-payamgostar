<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceListSaveResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceListSaveResult
 * @subpackage Structs
 */
class PriceListSaveResult extends AbstractStructBase
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
     * The SavedPriceListId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SavedPriceListId = null;
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Success = null;
    /**
     * Constructor method for PriceListSaveResult
     * @uses PriceListSaveResult::setMessage()
     * @uses PriceListSaveResult::setSavedPriceListId()
     * @uses PriceListSaveResult::setSuccess()
     * @param string $message
     * @param string $savedPriceListId
     * @param bool $success
     */
    public function __construct(?string $message = null, ?string $savedPriceListId = null, ?bool $success = null)
    {
        $this
            ->setMessage($message)
            ->setSavedPriceListId($savedPriceListId)
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult
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
     * Get SavedPriceListId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSavedPriceListId(): ?string
    {
        return $this->SavedPriceListId ?? null;
    }
    /**
     * Set SavedPriceListId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $savedPriceListId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult
     */
    public function setSavedPriceListId(?string $savedPriceListId = null): self
    {
        // validation for constraint: string
        if (!is_null($savedPriceListId) && !is_string($savedPriceListId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savedPriceListId, true), gettype($savedPriceListId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($savedPriceListId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $savedPriceListId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($savedPriceListId, true)), __LINE__);
        }
        if (is_null($savedPriceListId) || (is_array($savedPriceListId) && empty($savedPriceListId))) {
            unset($this->SavedPriceListId);
        } else {
            $this->SavedPriceListId = $savedPriceListId;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult
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
