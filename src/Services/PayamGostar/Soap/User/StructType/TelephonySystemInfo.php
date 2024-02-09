<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TelephonySystemInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TelephonySystemInfo
 * @subpackage Structs
 */
class TelephonySystemInfo extends AbstractStructBase
{
    /**
     * The BrevityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BrevityName = null;
    /**
     * The Extensions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo $Extensions = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OfficeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OfficeId = null;
    /**
     * The ServerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ServerAddress = null;
    /**
     * Constructor method for TelephonySystemInfo
     * @uses TelephonySystemInfo::setBrevityName()
     * @uses TelephonySystemInfo::setExtensions()
     * @uses TelephonySystemInfo::setKey()
     * @uses TelephonySystemInfo::setName()
     * @uses TelephonySystemInfo::setOfficeId()
     * @uses TelephonySystemInfo::setServerAddress()
     * @param string $brevityName
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo $extensions
     * @param string $key
     * @param string $name
     * @param string $officeId
     * @param string $serverAddress
     */
    public function __construct(?string $brevityName = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo $extensions = null, ?string $key = null, ?string $name = null, ?string $officeId = null, ?string $serverAddress = null)
    {
        $this
            ->setBrevityName($brevityName)
            ->setExtensions($extensions)
            ->setKey($key)
            ->setName($name)
            ->setOfficeId($officeId)
            ->setServerAddress($serverAddress);
    }
    /**
     * Get BrevityName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrevityName(): ?string
    {
        return $this->BrevityName ?? null;
    }
    /**
     * Set BrevityName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brevityName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
     */
    public function setBrevityName(?string $brevityName = null): self
    {
        // validation for constraint: string
        if (!is_null($brevityName) && !is_string($brevityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brevityName, true), gettype($brevityName)), __LINE__);
        }
        if (is_null($brevityName) || (is_array($brevityName) && empty($brevityName))) {
            unset($this->BrevityName);
        } else {
            $this->BrevityName = $brevityName;
        }
        
        return $this;
    }
    /**
     * Get Extensions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo|null
     */
    public function getExtensions(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo
    {
        return $this->Extensions ?? null;
    }
    /**
     * Set Extensions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo $extensions
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
     */
    public function setExtensions(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemExtensionInfo $extensions = null): self
    {
        if (is_null($extensions) || (is_array($extensions) && empty($extensions))) {
            unset($this->Extensions);
        } else {
            $this->Extensions = $extensions;
        }
        
        return $this;
    }
    /**
     * Get Key value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key ?? null;
    }
    /**
     * Set Key value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $key
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        if (is_null($key) || (is_array($key) && empty($key))) {
            unset($this->Key);
        } else {
            $this->Key = $key;
        }
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
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
    /**
     * Get OfficeId value
     * @return string|null
     */
    public function getOfficeId(): ?string
    {
        return $this->OfficeId;
    }
    /**
     * Set OfficeId value
     * @param string $officeId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
     */
    public function setOfficeId(?string $officeId = null): self
    {
        // validation for constraint: string
        if (!is_null($officeId) && !is_string($officeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeId, true), gettype($officeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($officeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $officeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($officeId, true)), __LINE__);
        }
        $this->OfficeId = $officeId;
        
        return $this;
    }
    /**
     * Get ServerAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServerAddress(): ?string
    {
        return $this->ServerAddress ?? null;
    }
    /**
     * Set ServerAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serverAddress
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\TelephonySystemInfo
     */
    public function setServerAddress(?string $serverAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($serverAddress) && !is_string($serverAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverAddress, true), gettype($serverAddress)), __LINE__);
        }
        if (is_null($serverAddress) || (is_array($serverAddress) && empty($serverAddress))) {
            unset($this->ServerAddress);
        } else {
            $this->ServerAddress = $serverAddress;
        }
        
        return $this;
    }
}
