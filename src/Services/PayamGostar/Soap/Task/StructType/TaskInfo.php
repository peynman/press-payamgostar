<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TaskInfo
 * @subpackage Structs
 */
class TaskInfo extends GeneralCrmObjectInfo
{
    /**
     * The AssignedUserToTask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AssignedUserToTask = null;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DueDate = null;
    /**
     * The PercentCompleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PercentCompleted = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The TaskStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TaskStatus = null;
    /**
     * Constructor method for TaskInfo
     * @uses TaskInfo::setAssignedUserToTask()
     * @uses TaskInfo::setDueDate()
     * @uses TaskInfo::setPercentCompleted()
     * @uses TaskInfo::setStartDate()
     * @uses TaskInfo::setTaskStatus()
     * @param string $assignedUserToTask
     * @param string $dueDate
     * @param int $percentCompleted
     * @param string $startDate
     * @param string $taskStatus
     */
    public function __construct(?string $assignedUserToTask = null, ?string $dueDate = null, ?int $percentCompleted = null, ?string $startDate = null, ?string $taskStatus = null)
    {
        $this
            ->setAssignedUserToTask($assignedUserToTask)
            ->setDueDate($dueDate)
            ->setPercentCompleted($percentCompleted)
            ->setStartDate($startDate)
            ->setTaskStatus($taskStatus);
    }
    /**
     * Get AssignedUserToTask value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedUserToTask(): ?string
    {
        return $this->AssignedUserToTask ?? null;
    }
    /**
     * Set AssignedUserToTask value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedUserToTask
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
     */
    public function setAssignedUserToTask(?string $assignedUserToTask = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedUserToTask) && !is_string($assignedUserToTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedUserToTask, true), gettype($assignedUserToTask)), __LINE__);
        }
        if (is_null($assignedUserToTask) || (is_array($assignedUserToTask) && empty($assignedUserToTask))) {
            unset($this->AssignedUserToTask);
        } else {
            $this->AssignedUserToTask = $assignedUserToTask;
        }
        
        return $this;
    }
    /**
     * Get DueDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->DueDate ?? null;
    }
    /**
     * Set DueDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dueDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        if (is_null($dueDate) || (is_array($dueDate) && empty($dueDate))) {
            unset($this->DueDate);
        } else {
            $this->DueDate = $dueDate;
        }
        
        return $this;
    }
    /**
     * Get PercentCompleted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPercentCompleted(): ?int
    {
        return $this->PercentCompleted ?? null;
    }
    /**
     * Set PercentCompleted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $percentCompleted
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
     */
    public function setPercentCompleted(?int $percentCompleted = null): self
    {
        // validation for constraint: int
        if (!is_null($percentCompleted) && !(is_int($percentCompleted) || ctype_digit($percentCompleted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($percentCompleted, true), gettype($percentCompleted)), __LINE__);
        }
        if (is_null($percentCompleted) || (is_array($percentCompleted) && empty($percentCompleted))) {
            unset($this->PercentCompleted);
        } else {
            $this->PercentCompleted = $percentCompleted;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
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
     * Get TaskStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaskStatus(): ?string
    {
        return $this->TaskStatus ?? null;
    }
    /**
     * Set TaskStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taskStatus
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
     */
    public function setTaskStatus(?string $taskStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($taskStatus) && !is_string($taskStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskStatus, true), gettype($taskStatus)), __LINE__);
        }
        if (is_null($taskStatus) || (is_array($taskStatus) && empty($taskStatus))) {
            unset($this->TaskStatus);
        } else {
            $this->TaskStatus = $taskStatus;
        }
        
        return $this;
    }
}
