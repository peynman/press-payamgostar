<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserInfoItem StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserInfoItem
 * @subpackage Structs
 */
class UserInfoItem extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Email = null;
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
     * The IdentityId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IdentityId = null;
    /**
     * The NickName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NickName = null;
    /**
     * The TelephonyPassword
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TelephonyPassword = null;
    /**
     * The UserKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UserKey = null;
    /**
     * The UserType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    protected ?string $UserType = null;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * Constructor method for UserInfoItem
     * @uses UserInfoItem::setEmail()
     * @uses UserInfoItem::setId()
     * @uses UserInfoItem::setIdentityId()
     * @uses UserInfoItem::setNickName()
     * @uses UserInfoItem::setTelephonyPassword()
     * @uses UserInfoItem::setUserKey()
     * @uses UserInfoItem::setUserType()
     * @uses UserInfoItem::setUsername()
     * @param string $email
     * @param string $id
     * @param string $identityId
     * @param string $nickName
     * @param string $telephonyPassword
     * @param string $userKey
     * @param array|string $userType
     * @param string $username
     */
    public function __construct(?string $email = null, ?string $id = null, ?string $identityId = null, ?string $nickName = null, ?string $telephonyPassword = null, ?string $userKey = null, $userType = null, ?string $username = null)
    {
        $this
            ->setEmail($email)
            ->setId($id)
            ->setIdentityId($identityId)
            ->setNickName($nickName)
            ->setTelephonyPassword($telephonyPassword)
            ->setUserKey($userKey)
            ->setUserType($userType)
            ->setUsername($username);
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
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
     * Get IdentityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentityId(): ?string
    {
        return $this->IdentityId ?? null;
    }
    /**
     * Set IdentityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identityId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setIdentityId(?string $identityId = null): self
    {
        // validation for constraint: string
        if (!is_null($identityId) && !is_string($identityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityId, true), gettype($identityId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($identityId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $identityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($identityId, true)), __LINE__);
        }
        if (is_null($identityId) || (is_array($identityId) && empty($identityId))) {
            unset($this->IdentityId);
        } else {
            $this->IdentityId = $identityId;
        }
        
        return $this;
    }
    /**
     * Get NickName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNickName(): ?string
    {
        return $this->NickName ?? null;
    }
    /**
     * Set NickName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nickName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setNickName(?string $nickName = null): self
    {
        // validation for constraint: string
        if (!is_null($nickName) && !is_string($nickName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nickName, true), gettype($nickName)), __LINE__);
        }
        if (is_null($nickName) || (is_array($nickName) && empty($nickName))) {
            unset($this->NickName);
        } else {
            $this->NickName = $nickName;
        }
        
        return $this;
    }
    /**
     * Get TelephonyPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTelephonyPassword(): ?string
    {
        return $this->TelephonyPassword ?? null;
    }
    /**
     * Set TelephonyPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $telephonyPassword
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setTelephonyPassword(?string $telephonyPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($telephonyPassword) && !is_string($telephonyPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephonyPassword, true), gettype($telephonyPassword)), __LINE__);
        }
        if (is_null($telephonyPassword) || (is_array($telephonyPassword) && empty($telephonyPassword))) {
            unset($this->TelephonyPassword);
        } else {
            $this->TelephonyPassword = $telephonyPassword;
        }
        
        return $this;
    }
    /**
     * Get UserKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserKey(): ?string
    {
        return $this->UserKey ?? null;
    }
    /**
     * Set UserKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userKey
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setUserKey(?string $userKey = null): self
    {
        // validation for constraint: string
        if (!is_null($userKey) && !is_string($userKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userKey, true), gettype($userKey)), __LINE__);
        }
        if (is_null($userKey) || (is_array($userKey) && empty($userKey))) {
            unset($this->UserKey);
        } else {
            $this->UserKey = $userKey;
        }
        
        return $this;
    }
    /**
     * Get UserType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string
     */
    public function getUserType(): ?string
    {
        return $this->UserType ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUserType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserType method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserTypeForListConstraintFromSetUserType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $userInfoItemUserTypeItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\UserType::valueIsValid($userInfoItemUserTypeItem)) {
                $invalidValues[] = is_object($userInfoItemUserTypeItem) ? get_class($userInfoItemUserTypeItem) : sprintf('%s(%s)', gettype($userInfoItemUserTypeItem), var_export($userInfoItemUserTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\UserType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\UserType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\UserType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\UserType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $userType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setUserType($userType = null): self
    {
        // validation for constraint: list
        if ('' !== ($userTypeArrayErrorMessage = self::validateUserTypeForListConstraintFromSetUserType(is_string($userType) ? explode(' ', $userType) : $userType))) {
            throw new InvalidArgumentException($userTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($userType) || (is_array($userType) && empty($userType))) {
            unset($this->UserType);
        } else {
            $this->UserType = is_array($userType) ? implode(' ', $userType) : $userType;
        }
        
        return $this;
    }
    /**
     * Get Username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->Username ?? null;
    }
    /**
     * Set Username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoItem
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->Username);
        } else {
            $this->Username = $username;
        }
        
        return $this;
    }
}
