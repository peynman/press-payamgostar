<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LineInfo
 * @subpackage Structs
 */
class LineInfo extends AbstractStructBase
{
    /**
     * The CanReceive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CanReceive = null;
    /**
     * The CanSend
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CanSend = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsActive = null;
    /**
     * The IsOnline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOnline = null;
    /**
     * The MediaType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MediaType = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for LineInfo
     * @uses LineInfo::setCanReceive()
     * @uses LineInfo::setCanSend()
     * @uses LineInfo::setId()
     * @uses LineInfo::setIsActive()
     * @uses LineInfo::setIsOnline()
     * @uses LineInfo::setMediaType()
     * @uses LineInfo::setName()
     * @param bool $canReceive
     * @param bool $canSend
     * @param string $id
     * @param bool $isActive
     * @param bool $isOnline
     * @param string $mediaType
     * @param string $name
     */
    public function __construct(?bool $canReceive = null, ?bool $canSend = null, ?string $id = null, ?bool $isActive = null, ?bool $isOnline = null, ?string $mediaType = null, ?string $name = null)
    {
        $this
            ->setCanReceive($canReceive)
            ->setCanSend($canSend)
            ->setId($id)
            ->setIsActive($isActive)
            ->setIsOnline($isOnline)
            ->setMediaType($mediaType)
            ->setName($name);
    }
    /**
     * Get CanReceive value
     * @return bool|null
     */
    public function getCanReceive(): ?bool
    {
        return $this->CanReceive;
    }
    /**
     * Set CanReceive value
     * @param bool $canReceive
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setCanReceive(?bool $canReceive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canReceive) && !is_bool($canReceive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canReceive, true), gettype($canReceive)), __LINE__);
        }
        $this->CanReceive = $canReceive;
        
        return $this;
    }
    /**
     * Get CanSend value
     * @return bool|null
     */
    public function getCanSend(): ?bool
    {
        return $this->CanSend;
    }
    /**
     * Set CanSend value
     * @param bool $canSend
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setCanSend(?bool $canSend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canSend) && !is_bool($canSend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canSend, true), gettype($canSend)), __LINE__);
        }
        $this->CanSend = $canSend;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->IsActive;
    }
    /**
     * Set IsActive value
     * @param bool $isActive
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->IsActive = $isActive;
        
        return $this;
    }
    /**
     * Get IsOnline value
     * @return bool|null
     */
    public function getIsOnline(): ?bool
    {
        return $this->IsOnline;
    }
    /**
     * Set IsOnline value
     * @param bool $isOnline
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setIsOnline(?bool $isOnline = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOnline) && !is_bool($isOnline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOnline, true), gettype($isOnline)), __LINE__);
        }
        $this->IsOnline = $isOnline;
        
        return $this;
    }
    /**
     * Get MediaType value
     * @return string|null
     */
    public function getMediaType(): ?string
    {
        return $this->MediaType;
    }
    /**
     * Set MediaType value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\MediaType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\MediaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mediaType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setMediaType(?string $mediaType = null): self
    {
        // validation for constraint: enumeration
        if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\MediaType::valueIsValid($mediaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\MediaType', is_array($mediaType) ? implode(', ', $mediaType) : var_export($mediaType, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\MediaType::getValidValues())), __LINE__);
        }
        $this->MediaType = $mediaType;
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\LineInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
