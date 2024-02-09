<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AppointmentInfo
 * @subpackage Structs
 */
class AppointmentInfo extends GeneralCrmObjectInfo
{
    /**
     * The AppointmentAttendantsInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo $AppointmentAttendantsInfo = null;
    /**
     * The AppointmentStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AppointmentStatus = null;
    /**
     * The AssignedToId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AssignedToId = null;
    /**
     * The CalendarId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CalendarId = null;
    /**
     * The CalendarName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CalendarName = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The EndDatePersian
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDatePersian = null;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Latitude = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Longitude = null;
    /**
     * The RoomType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RoomType = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The StartDatePersian
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDatePersian = null;
    /**
     * Constructor method for AppointmentInfo
     * @uses AppointmentInfo::setAppointmentAttendantsInfo()
     * @uses AppointmentInfo::setAppointmentStatus()
     * @uses AppointmentInfo::setAssignedToId()
     * @uses AppointmentInfo::setCalendarId()
     * @uses AppointmentInfo::setCalendarName()
     * @uses AppointmentInfo::setEndDate()
     * @uses AppointmentInfo::setEndDatePersian()
     * @uses AppointmentInfo::setLatitude()
     * @uses AppointmentInfo::setLocation()
     * @uses AppointmentInfo::setLongitude()
     * @uses AppointmentInfo::setRoomType()
     * @uses AppointmentInfo::setStartDate()
     * @uses AppointmentInfo::setStartDatePersian()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo $appointmentAttendantsInfo
     * @param string $appointmentStatus
     * @param string $assignedToId
     * @param string $calendarId
     * @param string $calendarName
     * @param string $endDate
     * @param string $endDatePersian
     * @param float $latitude
     * @param string $location
     * @param float $longitude
     * @param string $roomType
     * @param string $startDate
     * @param string $startDatePersian
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo $appointmentAttendantsInfo = null, ?string $appointmentStatus = null, ?string $assignedToId = null, ?string $calendarId = null, ?string $calendarName = null, ?string $endDate = null, ?string $endDatePersian = null, ?float $latitude = null, ?string $location = null, ?float $longitude = null, ?string $roomType = null, ?string $startDate = null, ?string $startDatePersian = null)
    {
        $this
            ->setAppointmentAttendantsInfo($appointmentAttendantsInfo)
            ->setAppointmentStatus($appointmentStatus)
            ->setAssignedToId($assignedToId)
            ->setCalendarId($calendarId)
            ->setCalendarName($calendarName)
            ->setEndDate($endDate)
            ->setEndDatePersian($endDatePersian)
            ->setLatitude($latitude)
            ->setLocation($location)
            ->setLongitude($longitude)
            ->setRoomType($roomType)
            ->setStartDate($startDate)
            ->setStartDatePersian($startDatePersian);
    }
    /**
     * Get AppointmentAttendantsInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo|null
     */
    public function getAppointmentAttendantsInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo
    {
        return $this->AppointmentAttendantsInfo ?? null;
    }
    /**
     * Set AppointmentAttendantsInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo $appointmentAttendantsInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setAppointmentAttendantsInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo $appointmentAttendantsInfo = null): self
    {
        if (is_null($appointmentAttendantsInfo) || (is_array($appointmentAttendantsInfo) && empty($appointmentAttendantsInfo))) {
            unset($this->AppointmentAttendantsInfo);
        } else {
            $this->AppointmentAttendantsInfo = $appointmentAttendantsInfo;
        }
        
        return $this;
    }
    /**
     * Get AppointmentStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAppointmentStatus(): ?string
    {
        return $this->AppointmentStatus ?? null;
    }
    /**
     * Set AppointmentStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentStatus::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $appointmentStatus
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setAppointmentStatus(?string $appointmentStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentStatus::valueIsValid($appointmentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentStatus', is_array($appointmentStatus) ? implode(', ', $appointmentStatus) : var_export($appointmentStatus, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentStatus::getValidValues())), __LINE__);
        }
        if (is_null($appointmentStatus) || (is_array($appointmentStatus) && empty($appointmentStatus))) {
            unset($this->AppointmentStatus);
        } else {
            $this->AppointmentStatus = $appointmentStatus;
        }
        
        return $this;
    }
    /**
     * Get AssignedToId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedToId(): ?string
    {
        return $this->AssignedToId ?? null;
    }
    /**
     * Set AssignedToId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedToId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setAssignedToId(?string $assignedToId = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedToId) && !is_string($assignedToId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedToId, true), gettype($assignedToId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($assignedToId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $assignedToId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($assignedToId, true)), __LINE__);
        }
        if (is_null($assignedToId) || (is_array($assignedToId) && empty($assignedToId))) {
            unset($this->AssignedToId);
        } else {
            $this->AssignedToId = $assignedToId;
        }
        
        return $this;
    }
    /**
     * Get CalendarId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalendarId(): ?string
    {
        return $this->CalendarId ?? null;
    }
    /**
     * Set CalendarId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calendarId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setCalendarId(?string $calendarId = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarId) && !is_string($calendarId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarId, true), gettype($calendarId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($calendarId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $calendarId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($calendarId, true)), __LINE__);
        }
        if (is_null($calendarId) || (is_array($calendarId) && empty($calendarId))) {
            unset($this->CalendarId);
        } else {
            $this->CalendarId = $calendarId;
        }
        
        return $this;
    }
    /**
     * Get CalendarName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalendarName(): ?string
    {
        return $this->CalendarName ?? null;
    }
    /**
     * Set CalendarName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calendarName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setCalendarName(?string $calendarName = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarName) && !is_string($calendarName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarName, true), gettype($calendarName)), __LINE__);
        }
        if (is_null($calendarName) || (is_array($calendarName) && empty($calendarName))) {
            unset($this->CalendarName);
        } else {
            $this->CalendarName = $calendarName;
        }
        
        return $this;
    }
    /**
     * Get EndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate ?? null;
    }
    /**
     * Set EndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->EndDate);
        } else {
            $this->EndDate = $endDate;
        }
        
        return $this;
    }
    /**
     * Get EndDatePersian value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDatePersian(): ?string
    {
        return $this->EndDatePersian ?? null;
    }
    /**
     * Set EndDatePersian value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDatePersian
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setEndDatePersian(?string $endDatePersian = null): self
    {
        // validation for constraint: string
        if (!is_null($endDatePersian) && !is_string($endDatePersian)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDatePersian, true), gettype($endDatePersian)), __LINE__);
        }
        if (is_null($endDatePersian) || (is_array($endDatePersian) && empty($endDatePersian))) {
            unset($this->EndDatePersian);
        } else {
            $this->EndDatePersian = $endDatePersian;
        }
        
        return $this;
    }
    /**
     * Get Latitude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->Latitude ?? null;
    }
    /**
     * Set Latitude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $latitude
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setLatitude(?float $latitude = null): self
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        if (is_null($latitude) || (is_array($latitude) && empty($latitude))) {
            unset($this->Latitude);
        } else {
            $this->Latitude = $latitude;
        }
        
        return $this;
    }
    /**
     * Get Location value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location ?? null;
    }
    /**
     * Set Location value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $location
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        if (is_null($location) || (is_array($location) && empty($location))) {
            unset($this->Location);
        } else {
            $this->Location = $location;
        }
        
        return $this;
    }
    /**
     * Get Longitude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->Longitude ?? null;
    }
    /**
     * Set Longitude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $longitude
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setLongitude(?float $longitude = null): self
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        if (is_null($longitude) || (is_array($longitude) && empty($longitude))) {
            unset($this->Longitude);
        } else {
            $this->Longitude = $longitude;
        }
        
        return $this;
    }
    /**
     * Get RoomType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRoomType(): ?string
    {
        return $this->RoomType ?? null;
    }
    /**
     * Set RoomType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentRoomType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentRoomType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $roomType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setRoomType(?string $roomType = null): self
    {
        // validation for constraint: enumeration
        if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentRoomType::valueIsValid($roomType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentRoomType', is_array($roomType) ? implode(', ', $roomType) : var_export($roomType, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType\AppointmentRoomType::getValidValues())), __LINE__);
        }
        if (is_null($roomType) || (is_array($roomType) && empty($roomType))) {
            unset($this->RoomType);
        } else {
            $this->RoomType = $roomType;
        }
        
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate ?? null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
        
        return $this;
    }
    /**
     * Get StartDatePersian value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDatePersian(): ?string
    {
        return $this->StartDatePersian ?? null;
    }
    /**
     * Set StartDatePersian value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDatePersian
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
     */
    public function setStartDatePersian(?string $startDatePersian = null): self
    {
        // validation for constraint: string
        if (!is_null($startDatePersian) && !is_string($startDatePersian)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDatePersian, true), gettype($startDatePersian)), __LINE__);
        }
        if (is_null($startDatePersian) || (is_array($startDatePersian) && empty($startDatePersian))) {
            unset($this->StartDatePersian);
        } else {
            $this->StartDatePersian = $startDatePersian;
        }
        
        return $this;
    }
}
