<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveIdentity StructType
 * @subpackage Structs
 */
class SaveIdentity extends AbstractStructBase
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
     * The identity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identity = null;
    /**
     * Constructor method for SaveIdentity
     * @uses SaveIdentity::setUsername()
     * @uses SaveIdentity::setPassword()
     * @uses SaveIdentity::setIdentity()
     * @param string $username
     * @param string $password
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identity
     */
    public function __construct(?string $username = null, ?string $password = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identity = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setIdentity($identity);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentity
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentity
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
     * Get identity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function getIdentity(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return $this->identity ?? null;
    }
    /**
     * Set identity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identity
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentity
     */
    public function setIdentity(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identity = null): self
    {
        if (is_null($identity) || (is_array($identity) && empty($identity))) {
            unset($this->identity);
        } else {
            $this->identity = $identity;
        }
        
        return $this;
    }
}
