<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTelephonyPassword StructType
 * @subpackage Structs
 */
class UpdateTelephonyPassword extends AbstractStructBase
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
     * The targetUsername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $targetUsername = null;
    /**
     * The newPassword
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $newPassword = null;
    /**
     * Constructor method for UpdateTelephonyPassword
     * @uses UpdateTelephonyPassword::setUserName()
     * @uses UpdateTelephonyPassword::setPassword()
     * @uses UpdateTelephonyPassword::setTargetUsername()
     * @uses UpdateTelephonyPassword::setNewPassword()
     * @param string $userName
     * @param string $password
     * @param string $targetUsername
     * @param string $newPassword
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $targetUsername = null, ?string $newPassword = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setTargetUsername($targetUsername)
            ->setNewPassword($newPassword);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPassword
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPassword
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPassword
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
    /**
     * Get newPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword ?? null;
    }
    /**
     * Set newPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $newPassword
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UpdateTelephonyPassword
     */
    public function setNewPassword(?string $newPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        if (is_null($newPassword) || (is_array($newPassword) && empty($newPassword))) {
            unset($this->newPassword);
        } else {
            $this->newPassword = $newPassword;
        }
        
        return $this;
    }
}
