<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentAttendantsInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AppointmentAttendantsInfo
 * @subpackage Structs
 */
class AppointmentAttendantsInfo extends AbstractStructBase
{
    /**
     * The AlertOrganizerOnFeedback
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AlertOrganizerOnFeedback = null;
    /**
     * The AttendantType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AttendantType = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The GetApprove
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GetApprove = null;
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
     * The Mobile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Mobile = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The PresenceIsRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PresenceIsRequired = null;
    /**
     * The RefCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RefCode = null;
    /**
     * The SendPresenceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SendPresenceList = null;
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $UserId = null;
    /**
     * Constructor method for AppointmentAttendantsInfo
     * @uses AppointmentAttendantsInfo::setAlertOrganizerOnFeedback()
     * @uses AppointmentAttendantsInfo::setAttendantType()
     * @uses AppointmentAttendantsInfo::setEmail()
     * @uses AppointmentAttendantsInfo::setGetApprove()
     * @uses AppointmentAttendantsInfo::setIdentityId()
     * @uses AppointmentAttendantsInfo::setMobile()
     * @uses AppointmentAttendantsInfo::setName()
     * @uses AppointmentAttendantsInfo::setPresenceIsRequired()
     * @uses AppointmentAttendantsInfo::setRefCode()
     * @uses AppointmentAttendantsInfo::setSendPresenceList()
     * @uses AppointmentAttendantsInfo::setUserId()
     * @param bool $alertOrganizerOnFeedback
     * @param string $attendantType
     * @param string $email
     * @param bool $getApprove
     * @param string $identityId
     * @param string $mobile
     * @param string $name
     * @param bool $presenceIsRequired
     * @param int $refCode
     * @param bool $sendPresenceList
     * @param string $userId
     */
    public function __construct(?bool $alertOrganizerOnFeedback = null, ?string $attendantType = null, ?string $email = null, ?bool $getApprove = null, ?string $identityId = null, ?string $mobile = null, ?string $name = null, ?bool $presenceIsRequired = null, ?int $refCode = null, ?bool $sendPresenceList = null, ?string $userId = null)
    {
        $this
            ->setAlertOrganizerOnFeedback($alertOrganizerOnFeedback)
            ->setAttendantType($attendantType)
            ->setEmail($email)
            ->setGetApprove($getApprove)
            ->setIdentityId($identityId)
            ->setMobile($mobile)
            ->setName($name)
            ->setPresenceIsRequired($presenceIsRequired)
            ->setRefCode($refCode)
            ->setSendPresenceList($sendPresenceList)
            ->setUserId($userId);
    }
    /**
     * Get AlertOrganizerOnFeedback value
     * @return bool|null
     */
    public function getAlertOrganizerOnFeedback(): ?bool
    {
        return $this->AlertOrganizerOnFeedback;
    }
    /**
     * Set AlertOrganizerOnFeedback value
     * @param bool $alertOrganizerOnFeedback
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setAlertOrganizerOnFeedback(?bool $alertOrganizerOnFeedback = null): self
    {
        // validation for constraint: boolean
        if (!is_null($alertOrganizerOnFeedback) && !is_bool($alertOrganizerOnFeedback)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($alertOrganizerOnFeedback, true), gettype($alertOrganizerOnFeedback)), __LINE__);
        }
        $this->AlertOrganizerOnFeedback = $alertOrganizerOnFeedback;
        
        return $this;
    }
    /**
     * Get AttendantType value
     * @return string|null
     */
    public function getAttendantType(): ?string
    {
        return $this->AttendantType;
    }
    /**
     * Set AttendantType value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AttendantType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AttendantType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $attendantType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setAttendantType(?string $attendantType = null): self
    {
        // validation for constraint: enumeration
        if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AttendantType::valueIsValid($attendantType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AttendantType', is_array($attendantType) ? implode(', ', $attendantType) : var_export($attendantType, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AttendantType::getValidValues())), __LINE__);
        }
        $this->AttendantType = $attendantType;
        
        return $this;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
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
     * Get GetApprove value
     * @return bool|null
     */
    public function getGetApprove(): ?bool
    {
        return $this->GetApprove;
    }
    /**
     * Set GetApprove value
     * @param bool $getApprove
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setGetApprove(?bool $getApprove = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getApprove) && !is_bool($getApprove)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getApprove, true), gettype($getApprove)), __LINE__);
        }
        $this->GetApprove = $getApprove;
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
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
     * Get Mobile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->Mobile ?? null;
    }
    /**
     * Set Mobile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobile
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        if (is_null($mobile) || (is_array($mobile) && empty($mobile))) {
            unset($this->Mobile);
        } else {
            $this->Mobile = $mobile;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
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
     * Get PresenceIsRequired value
     * @return bool|null
     */
    public function getPresenceIsRequired(): ?bool
    {
        return $this->PresenceIsRequired;
    }
    /**
     * Set PresenceIsRequired value
     * @param bool $presenceIsRequired
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setPresenceIsRequired(?bool $presenceIsRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($presenceIsRequired) && !is_bool($presenceIsRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($presenceIsRequired, true), gettype($presenceIsRequired)), __LINE__);
        }
        $this->PresenceIsRequired = $presenceIsRequired;
        
        return $this;
    }
    /**
     * Get RefCode value
     * @return int|null
     */
    public function getRefCode(): ?int
    {
        return $this->RefCode;
    }
    /**
     * Set RefCode value
     * @param int $refCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setRefCode(?int $refCode = null): self
    {
        // validation for constraint: int
        if (!is_null($refCode) && !(is_int($refCode) || ctype_digit($refCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refCode, true), gettype($refCode)), __LINE__);
        }
        $this->RefCode = $refCode;
        
        return $this;
    }
    /**
     * Get SendPresenceList value
     * @return bool|null
     */
    public function getSendPresenceList(): ?bool
    {
        return $this->SendPresenceList;
    }
    /**
     * Set SendPresenceList value
     * @param bool $sendPresenceList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setSendPresenceList(?bool $sendPresenceList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendPresenceList) && !is_bool($sendPresenceList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendPresenceList, true), gettype($sendPresenceList)), __LINE__);
        }
        $this->SendPresenceList = $sendPresenceList;
        
        return $this;
    }
    /**
     * Get UserId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->UserId ?? null;
    }
    /**
     * Set UserId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userId, true)), __LINE__);
        }
        if (is_null($userId) || (is_array($userId) && empty($userId))) {
            unset($this->UserId);
        } else {
            $this->UserId = $userId;
        }
        
        return $this;
    }
}
