<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAppointmentInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAppointmentInfo
 * @subpackage Arrays
 */
class ArrayOfAppointmentInfo extends AbstractStructArrayBase
{
    /**
     * The AppointmentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo[]
     */
    protected ?array $AppointmentInfo = null;
    /**
     * Constructor method for ArrayOfAppointmentInfo
     * @uses ArrayOfAppointmentInfo::setAppointmentInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo[] $appointmentInfo
     */
    public function __construct(?array $appointmentInfo = null)
    {
        $this
            ->setAppointmentInfo($appointmentInfo);
    }
    /**
     * Get AppointmentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo[]
     */
    public function getAppointmentInfo(): ?array
    {
        return $this->AppointmentInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAppointmentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppointmentInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppointmentInfoForArrayConstraintFromSetAppointmentInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAppointmentInfoAppointmentInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAppointmentInfoAppointmentInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo) {
                $invalidValues[] = is_object($arrayOfAppointmentInfoAppointmentInfoItem) ? get_class($arrayOfAppointmentInfoAppointmentInfoItem) : sprintf('%s(%s)', gettype($arrayOfAppointmentInfoAppointmentInfoItem), var_export($arrayOfAppointmentInfoAppointmentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AppointmentInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AppointmentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo[] $appointmentInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo
     */
    public function setAppointmentInfo(?array $appointmentInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($appointmentInfoArrayErrorMessage = self::validateAppointmentInfoForArrayConstraintFromSetAppointmentInfo($appointmentInfo))) {
            throw new InvalidArgumentException($appointmentInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($appointmentInfo) || (is_array($appointmentInfo) && empty($appointmentInfo))) {
            unset($this->AppointmentInfo);
        } else {
            $this->AppointmentInfo = $appointmentInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo) {
            throw new InvalidArgumentException(sprintf('The AppointmentInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AppointmentInfo
     */
    public function getAttributeName(): string
    {
        return 'AppointmentInfo';
    }
}
