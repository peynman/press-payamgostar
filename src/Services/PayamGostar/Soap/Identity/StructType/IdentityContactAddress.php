<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityContactAddress StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentityContactAddress
 * @subpackage Structs
 */
class IdentityContactAddress extends IdentityContact
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Address = null;
    /**
     * The AddressType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AddressType = null;
    /**
     * The AreaCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AreaCode = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The ZipBox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ZipBox = null;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ZipCode = null;
    /**
     * Constructor method for IdentityContactAddress
     * @uses IdentityContactAddress::setAddress()
     * @uses IdentityContactAddress::setAddressType()
     * @uses IdentityContactAddress::setAreaCode()
     * @uses IdentityContactAddress::setCity()
     * @uses IdentityContactAddress::setCountry()
     * @uses IdentityContactAddress::setState()
     * @uses IdentityContactAddress::setZipBox()
     * @uses IdentityContactAddress::setZipCode()
     * @param string $address
     * @param string $addressType
     * @param string $areaCode
     * @param string $city
     * @param string $country
     * @param string $state
     * @param string $zipBox
     * @param string $zipCode
     */
    public function __construct(?string $address = null, ?string $addressType = null, ?string $areaCode = null, ?string $city = null, ?string $country = null, ?string $state = null, ?string $zipBox = null, ?string $zipCode = null)
    {
        $this
            ->setAddress($address)
            ->setAddressType($addressType)
            ->setAreaCode($areaCode)
            ->setCity($city)
            ->setCountry($country)
            ->setState($state)
            ->setZipBox($zipBox)
            ->setZipCode($zipCode);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->Address ?? null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
        return $this;
    }
    /**
     * Get AddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->AddressType ?? null;
    }
    /**
     * Set AddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setAddressType(?string $addressType = null): self
    {
        // validation for constraint: string
        if (!is_null($addressType) && !is_string($addressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressType, true), gettype($addressType)), __LINE__);
        }
        if (is_null($addressType) || (is_array($addressType) && empty($addressType))) {
            unset($this->AddressType);
        } else {
            $this->AddressType = $addressType;
        }
        
        return $this;
    }
    /**
     * Get AreaCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->AreaCode ?? null;
    }
    /**
     * Set AreaCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $areaCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        if (is_null($areaCode) || (is_array($areaCode) && empty($areaCode))) {
            unset($this->AreaCode);
        } else {
            $this->AreaCode = $areaCode;
        }
        
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City ?? null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country ?? null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        
        return $this;
    }
    /**
     * Get State value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }
    /**
     * Set State value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->State);
        } else {
            $this->State = $state;
        }
        
        return $this;
    }
    /**
     * Get ZipBox value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipBox(): ?string
    {
        return $this->ZipBox ?? null;
    }
    /**
     * Set ZipBox value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipBox
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setZipBox(?string $zipBox = null): self
    {
        // validation for constraint: string
        if (!is_null($zipBox) && !is_string($zipBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipBox, true), gettype($zipBox)), __LINE__);
        }
        if (is_null($zipBox) || (is_array($zipBox) && empty($zipBox))) {
            unset($this->ZipBox);
        } else {
            $this->ZipBox = $zipBox;
        }
        
        return $this;
    }
    /**
     * Get ZipCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->ZipCode ?? null;
    }
    /**
     * Set ZipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityContactAddress
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        if (is_null($zipCode) || (is_array($zipCode) && empty($zipCode))) {
            unset($this->ZipCode);
        } else {
            $this->ZipCode = $zipCode;
        }
        
        return $this;
    }
}
