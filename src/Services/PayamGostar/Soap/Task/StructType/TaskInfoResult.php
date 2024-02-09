<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TaskInfoResult
 * @subpackage Structs
 */
class TaskInfoResult extends OperationResult
{
    /**
     * The TaskInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo $TaskInfo = null;
    /**
     * The TaskInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo $TaskInfoList = null;
    /**
     * Constructor method for TaskInfoResult
     * @uses TaskInfoResult::setTaskInfo()
     * @uses TaskInfoResult::setTaskInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo $taskInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo $taskInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo $taskInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo $taskInfoList = null)
    {
        $this
            ->setTaskInfo($taskInfo)
            ->setTaskInfoList($taskInfoList);
    }
    /**
     * Get TaskInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    public function getTaskInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
    {
        return $this->TaskInfo ?? null;
    }
    /**
     * Set TaskInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo $taskInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult
     */
    public function setTaskInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo $taskInfo = null): self
    {
        if (is_null($taskInfo) || (is_array($taskInfo) && empty($taskInfo))) {
            unset($this->TaskInfo);
        } else {
            $this->TaskInfo = $taskInfo;
        }
        
        return $this;
    }
    /**
     * Get TaskInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo|null
     */
    public function getTaskInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo
    {
        return $this->TaskInfoList ?? null;
    }
    /**
     * Set TaskInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo $taskInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult
     */
    public function setTaskInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo $taskInfoList = null): self
    {
        if (is_null($taskInfoList) || (is_array($taskInfoList) && empty($taskInfoList))) {
            unset($this->TaskInfoList);
        } else {
            $this->TaskInfoList = $taskInfoList;
        }
        
        return $this;
    }
}
