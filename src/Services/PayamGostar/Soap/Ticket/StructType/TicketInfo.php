<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketInfo
 * @subpackage Structs
 */
class TicketInfo extends GeneralCrmObjectInfo
{
    /**
     * The ActiveProcessLifePaths
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo $ActiveProcessLifePaths = null;
    /**
     * The AssignedTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AssignedTo = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The Impact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Impact = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Number = null;
    /**
     * The ResponseStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ResponseStatus = null;
    /**
     * The Severity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Severity = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * Constructor method for TicketInfo
     * @uses TicketInfo::setActiveProcessLifePaths()
     * @uses TicketInfo::setAssignedTo()
     * @uses TicketInfo::setEmailAddress()
     * @uses TicketInfo::setImpact()
     * @uses TicketInfo::setNumber()
     * @uses TicketInfo::setResponseStatus()
     * @uses TicketInfo::setSeverity()
     * @uses TicketInfo::setStatus()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo $activeProcessLifePaths
     * @param string $assignedTo
     * @param string $emailAddress
     * @param string $impact
     * @param int $number
     * @param string $responseStatus
     * @param string $severity
     * @param string $status
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo $activeProcessLifePaths = null, ?string $assignedTo = null, ?string $emailAddress = null, ?string $impact = null, ?int $number = null, ?string $responseStatus = null, ?string $severity = null, ?string $status = null)
    {
        $this
            ->setActiveProcessLifePaths($activeProcessLifePaths)
            ->setAssignedTo($assignedTo)
            ->setEmailAddress($emailAddress)
            ->setImpact($impact)
            ->setNumber($number)
            ->setResponseStatus($responseStatus)
            ->setSeverity($severity)
            ->setStatus($status);
    }
    /**
     * Get ActiveProcessLifePaths value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo|null
     */
    public function getActiveProcessLifePaths(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo
    {
        return $this->ActiveProcessLifePaths ?? null;
    }
    /**
     * Set ActiveProcessLifePaths value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo $activeProcessLifePaths
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setActiveProcessLifePaths(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfActiveProcessLifePathInfo $activeProcessLifePaths = null): self
    {
        if (is_null($activeProcessLifePaths) || (is_array($activeProcessLifePaths) && empty($activeProcessLifePaths))) {
            unset($this->ActiveProcessLifePaths);
        } else {
            $this->ActiveProcessLifePaths = $activeProcessLifePaths;
        }
        
        return $this;
    }
    /**
     * Get AssignedTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedTo(): ?string
    {
        return $this->AssignedTo ?? null;
    }
    /**
     * Set AssignedTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedTo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setAssignedTo(?string $assignedTo = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedTo) && !is_string($assignedTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedTo, true), gettype($assignedTo)), __LINE__);
        }
        if (is_null($assignedTo) || (is_array($assignedTo) && empty($assignedTo))) {
            unset($this->AssignedTo);
        } else {
            $this->AssignedTo = $assignedTo;
        }
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress ?? null;
    }
    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailAddress
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->EmailAddress);
        } else {
            $this->EmailAddress = $emailAddress;
        }
        
        return $this;
    }
    /**
     * Get Impact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImpact(): ?string
    {
        return $this->Impact ?? null;
    }
    /**
     * Set Impact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $impact
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setImpact(?string $impact = null): self
    {
        // validation for constraint: string
        if (!is_null($impact) && !is_string($impact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($impact, true), gettype($impact)), __LINE__);
        }
        if (is_null($impact) || (is_array($impact) && empty($impact))) {
            unset($this->Impact);
        } else {
            $this->Impact = $impact;
        }
        
        return $this;
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setNumber(?int $number = null): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get ResponseStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseStatus(): ?string
    {
        return $this->ResponseStatus ?? null;
    }
    /**
     * Set ResponseStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseStatus
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setResponseStatus(?string $responseStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($responseStatus) && !is_string($responseStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseStatus, true), gettype($responseStatus)), __LINE__);
        }
        if (is_null($responseStatus) || (is_array($responseStatus) && empty($responseStatus))) {
            unset($this->ResponseStatus);
        } else {
            $this->ResponseStatus = $responseStatus;
        }
        
        return $this;
    }
    /**
     * Get Severity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeverity(): ?string
    {
        return $this->Severity ?? null;
    }
    /**
     * Set Severity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $severity
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setSeverity(?string $severity = null): self
    {
        // validation for constraint: string
        if (!is_null($severity) && !is_string($severity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($severity, true), gettype($severity)), __LINE__);
        }
        if (is_null($severity) || (is_array($severity) && empty($severity))) {
            unset($this->Severity);
        } else {
            $this->Severity = $severity;
        }
        
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        
        return $this;
    }
}
