<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaskInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTaskInfo
 * @subpackage Arrays
 */
class ArrayOfTaskInfo extends AbstractStructArrayBase
{
    /**
     * The TaskInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo[]
     */
    protected ?array $TaskInfo = null;
    /**
     * Constructor method for ArrayOfTaskInfo
     * @uses ArrayOfTaskInfo::setTaskInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo[] $taskInfo
     */
    public function __construct(?array $taskInfo = null)
    {
        $this
            ->setTaskInfo($taskInfo);
    }
    /**
     * Get TaskInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo[]
     */
    public function getTaskInfo(): ?array
    {
        return $this->TaskInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaskInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskInfoForArrayConstraintFromSetTaskInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTaskInfoTaskInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaskInfoTaskInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo) {
                $invalidValues[] = is_object($arrayOfTaskInfoTaskInfoItem) ? get_class($arrayOfTaskInfoTaskInfoItem) : sprintf('%s(%s)', gettype($arrayOfTaskInfoTaskInfoItem), var_export($arrayOfTaskInfoTaskInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo[] $taskInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo
     */
    public function setTaskInfo(?array $taskInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taskInfoArrayErrorMessage = self::validateTaskInfoForArrayConstraintFromSetTaskInfo($taskInfo))) {
            throw new InvalidArgumentException($taskInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($taskInfo) || (is_array($taskInfo) && empty($taskInfo))) {
            unset($this->TaskInfo);
        } else {
            $this->TaskInfo = $taskInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfTaskInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo) {
            throw new InvalidArgumentException(sprintf('The TaskInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaskInfo
     */
    public function getAttributeName(): string
    {
        return 'TaskInfo';
    }
}
