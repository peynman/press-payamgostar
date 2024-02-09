<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityContactPhone StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentityContactPhone
 * @subpackage Structs
 */
class IdentityContactPhone extends IdentityContact
{
    /**
     * The ContinuedNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ContinuedNumber = null;
    /**
     * The Extension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Extension = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The PhoneType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneType = null;
    /**
     * Constructor method for IdentityContactPhone
     * @uses IdentityContactPhone::setContinuedNumber()
     * @uses IdentityContactPhone::setExtension()
     * @uses IdentityContactPhone::setPhoneNumber()
     * @uses IdentityContactPhone::setPhoneType()
     * @param string $continuedNumber
     * @param string $extension
     * @param string $phoneNumber
     * @param string $phoneType
     */
    public function __construct(?string $continuedNumber = null, ?string $extension = null, ?string $phoneNumber = null, ?string $phoneType = null)
    {
        $this
            ->setContinuedNumber($continuedNumber)
            ->setExtension($extension)
            ->setPhoneNumber($phoneNumber)
            ->setPhoneType($phoneType);
    }
    /**
     * Get ContinuedNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContinuedNumber(): ?string
    {
        return $this->ContinuedNumber ?? null;
    }
    /**
     * Set ContinuedNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $continuedNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactPhone
     */
    public function setContinuedNumber(?string $continuedNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($continuedNumber) && !is_string($continuedNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($continuedNumber, true), gettype($continuedNumber)), __LINE__);
        }
        if (is_null($continuedNumber) || (is_array($continuedNumber) && empty($continuedNumber))) {
            unset($this->ContinuedNumber);
        } else {
            $this->ContinuedNumber = $continuedNumber;
        }
        
        return $this;
    }
    /**
     * Get Extension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->Extension ?? null;
    }
    /**
     * Set Extension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extension
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactPhone
     */
    public function setExtension(?string $extension = null): self
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        if (is_null($extension) || (is_array($extension) && empty($extension))) {
            unset($this->Extension);
        } else {
            $this->Extension = $extension;
        }
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber ?? null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactPhone
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        
        return $this;
    }
    /**
     * Get PhoneType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneType(): ?string
    {
        return $this->PhoneType ?? null;
    }
    /**
     * Set PhoneType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactPhone
     */
    public function setPhoneType(?string $phoneType = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneType) && !is_string($phoneType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneType, true), gettype($phoneType)), __LINE__);
        }
        if (is_null($phoneType) || (is_array($phoneType) && empty($phoneType))) {
            unset($this->PhoneType);
        } else {
            $this->PhoneType = $phoneType;
        }
        
        return $this;
    }
}
