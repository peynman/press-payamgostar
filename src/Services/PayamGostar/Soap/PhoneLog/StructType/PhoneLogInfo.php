<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneLogInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhoneLogInfo
 * @subpackage Structs
 */
class PhoneLogInfo extends GeneralCrmObjectInfo
{
    /**
     * The CallType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CallType = null;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Duration = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The StartTimePersian
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartTimePersian = null;
    /**
     * The TalkedTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TalkedTo = null;
    /**
     * Constructor method for PhoneLogInfo
     * @uses PhoneLogInfo::setCallType()
     * @uses PhoneLogInfo::setDuration()
     * @uses PhoneLogInfo::setStartTime()
     * @uses PhoneLogInfo::setStartTimePersian()
     * @uses PhoneLogInfo::setTalkedTo()
     * @param string $callType
     * @param int $duration
     * @param string $startTime
     * @param string $startTimePersian
     * @param string $talkedTo
     */
    public function __construct(?string $callType = null, ?int $duration = null, ?string $startTime = null, ?string $startTimePersian = null, ?string $talkedTo = null)
    {
        $this
            ->setCallType($callType)
            ->setDuration($duration)
            ->setStartTime($startTime)
            ->setStartTimePersian($startTimePersian)
            ->setTalkedTo($talkedTo);
    }
    /**
     * Get CallType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCallType(): ?string
    {
        return $this->CallType ?? null;
    }
    /**
     * Set CallType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $callType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
     */
    public function setCallType(?string $callType = null): self
    {
        // validation for constraint: string
        if (!is_null($callType) && !is_string($callType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callType, true), gettype($callType)), __LINE__);
        }
        if (is_null($callType) || (is_array($callType) && empty($callType))) {
            unset($this->CallType);
        } else {
            $this->CallType = $callType;
        }
        
        return $this;
    }
    /**
     * Get Duration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->Duration ?? null;
    }
    /**
     * Set Duration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $duration
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        if (is_null($duration) || (is_array($duration) && empty($duration))) {
            unset($this->Duration);
        } else {
            $this->Duration = $duration;
        }
        
        return $this;
    }
    /**
     * Get StartTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime ?? null;
    }
    /**
     * Set StartTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startTime
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        if (is_null($startTime) || (is_array($startTime) && empty($startTime))) {
            unset($this->StartTime);
        } else {
            $this->StartTime = $startTime;
        }
        
        return $this;
    }
    /**
     * Get StartTimePersian value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartTimePersian(): ?string
    {
        return $this->StartTimePersian ?? null;
    }
    /**
     * Set StartTimePersian value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startTimePersian
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
     */
    public function setStartTimePersian(?string $startTimePersian = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimePersian) && !is_string($startTimePersian)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimePersian, true), gettype($startTimePersian)), __LINE__);
        }
        if (is_null($startTimePersian) || (is_array($startTimePersian) && empty($startTimePersian))) {
            unset($this->StartTimePersian);
        } else {
            $this->StartTimePersian = $startTimePersian;
        }
        
        return $this;
    }
    /**
     * Get TalkedTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTalkedTo(): ?string
    {
        return $this->TalkedTo ?? null;
    }
    /**
     * Set TalkedTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $talkedTo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
     */
    public function setTalkedTo(?string $talkedTo = null): self
    {
        // validation for constraint: string
        if (!is_null($talkedTo) && !is_string($talkedTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($talkedTo, true), gettype($talkedTo)), __LINE__);
        }
        if (is_null($talkedTo) || (is_array($talkedTo) && empty($talkedTo))) {
            unset($this->TalkedTo);
        } else {
            $this->TalkedTo = $talkedTo;
        }
        
        return $this;
    }
}
