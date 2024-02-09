<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserByExtension StructType
 * @subpackage Structs
 */
class GetUserByExtension extends AbstractStructBase
{
    /**
     * The userName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The telephonyKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $telephonyKey = null;
    /**
     * The extension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $extension = null;
    /**
     * Constructor method for GetUserByExtension
     * @uses GetUserByExtension::setUserName()
     * @uses GetUserByExtension::setPassword()
     * @uses GetUserByExtension::setTelephonyKey()
     * @uses GetUserByExtension::setExtension()
     * @param string $userName
     * @param string $password
     * @param string $telephonyKey
     * @param string $extension
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $telephonyKey = null, ?string $extension = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setTelephonyKey($telephonyKey)
            ->setExtension($extension);
    }
    /**
     * Get userName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName ?? null;
    }
    /**
     * Set userName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtension
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->userName);
        } else {
            $this->userName = $userName;
        }
        
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtension
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        
        return $this;
    }
    /**
     * Get telephonyKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTelephonyKey(): ?string
    {
        return $this->telephonyKey ?? null;
    }
    /**
     * Set telephonyKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $telephonyKey
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtension
     */
    public function setTelephonyKey(?string $telephonyKey = null): self
    {
        // validation for constraint: string
        if (!is_null($telephonyKey) && !is_string($telephonyKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephonyKey, true), gettype($telephonyKey)), __LINE__);
        }
        if (is_null($telephonyKey) || (is_array($telephonyKey) && empty($telephonyKey))) {
            unset($this->telephonyKey);
        } else {
            $this->telephonyKey = $telephonyKey;
        }
        
        return $this;
    }
    /**
     * Get extension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension ?? null;
    }
    /**
     * Set extension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extension
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserByExtension
     */
    public function setExtension(?string $extension = null): self
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        if (is_null($extension) || (is_array($extension) && empty($extension))) {
            unset($this->extension);
        } else {
            $this->extension = $extension;
        }
        
        return $this;
    }
}
