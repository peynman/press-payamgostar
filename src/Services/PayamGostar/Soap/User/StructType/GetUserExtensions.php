<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserExtensions StructType
 * @subpackage Structs
 */
class GetUserExtensions extends AbstractStructBase
{
    /**
     * The username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The targetUsername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $targetUsername = null;
    /**
     * Constructor method for GetUserExtensions
     * @uses GetUserExtensions::setUsername()
     * @uses GetUserExtensions::setPassword()
     * @uses GetUserExtensions::setTargetUsername()
     * @param string $username
     * @param string $password
     * @param string $targetUsername
     */
    public function __construct(?string $username = null, ?string $password = null, ?string $targetUsername = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setTargetUsername($targetUsername);
    }
    /**
     * Get username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username ?? null;
    }
    /**
     * Set username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensions
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->username);
        } else {
            $this->username = $username;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensions
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
     * Get targetUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTargetUsername(): ?string
    {
        return $this->targetUsername ?? null;
    }
    /**
     * Set targetUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $targetUsername
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\GetUserExtensions
     */
    public function setTargetUsername(?string $targetUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($targetUsername) && !is_string($targetUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetUsername, true), gettype($targetUsername)), __LINE__);
        }
        if (is_null($targetUsername) || (is_array($targetUsername) && empty($targetUsername))) {
            unset($this->targetUsername);
        } else {
            $this->targetUsername = $targetUsername;
        }
        
        return $this;
    }
}
