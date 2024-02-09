<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserInfo
 * @subpackage Structs
 */
class UserInfo extends OperationResult
{
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
     * The Lines
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo $Lines = null;
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
     * The UserGroups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo $UserGroups = null;
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
     * Constructor method for UserInfo
     * @uses UserInfo::setId()
     * @uses UserInfo::setIdentityId()
     * @uses UserInfo::setLines()
     * @uses UserInfo::setNickName()
     * @uses UserInfo::setTelephonyPassword()
     * @uses UserInfo::setUserGroups()
     * @uses UserInfo::setUserKey()
     * @uses UserInfo::setUserType()
     * @uses UserInfo::setUsername()
     * @param string $id
     * @param string $identityId
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo $lines
     * @param string $nickName
     * @param string $telephonyPassword
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo $userGroups
     * @param string $userKey
     * @param array|string $userType
     * @param string $username
     */
    public function __construct(?string $id = null, ?string $identityId = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo $lines = null, ?string $nickName = null, ?string $telephonyPassword = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo $userGroups = null, ?string $userKey = null, $userType = null, ?string $username = null)
    {
        $this
            ->setId($id)
            ->setIdentityId($identityId)
            ->setLines($lines)
            ->setNickName($nickName)
            ->setTelephonyPassword($telephonyPassword)
            ->setUserGroups($userGroups)
            ->setUserKey($userKey)
            ->setUserType($userType)
            ->setUsername($username);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
     * Get Lines value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo|null
     */
    public function getLines(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo
    {
        return $this->Lines ?? null;
    }
    /**
     * Set Lines value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo $lines
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
     */
    public function setLines(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfLineInfo $lines = null): self
    {
        if (is_null($lines) || (is_array($lines) && empty($lines))) {
            unset($this->Lines);
        } else {
            $this->Lines = $lines;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
     * Get UserGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo|null
     */
    public function getUserGroups(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo
    {
        return $this->UserGroups ?? null;
    }
    /**
     * Set UserGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo $userGroups
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
     */
    public function setUserGroups(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo $userGroups = null): self
    {
        if (is_null($userGroups) || (is_array($userGroups) && empty($userGroups))) {
            unset($this->UserGroups);
        } else {
            $this->UserGroups = $userGroups;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
        foreach ($values as $userInfoUserTypeItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType\UserType::valueIsValid($userInfoUserTypeItem)) {
                $invalidValues[] = is_object($userInfoUserTypeItem) ? get_class($userInfoUserTypeItem) : sprintf('%s(%s)', gettype($userInfoUserTypeItem), var_export($userInfoUserTypeItem, true));
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfo
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
