<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAppointmentAttendantsInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAppointmentAttendantsInfo
 * @subpackage Arrays
 */
class ArrayOfAppointmentAttendantsInfo extends AbstractStructArrayBase
{
    /**
     * The AppointmentAttendantsInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo[]
     */
    protected ?array $AppointmentAttendantsInfo = null;
    /**
     * Constructor method for ArrayOfAppointmentAttendantsInfo
     * @uses ArrayOfAppointmentAttendantsInfo::setAppointmentAttendantsInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo[] $appointmentAttendantsInfo
     */
    public function __construct(?array $appointmentAttendantsInfo = null)
    {
        $this
            ->setAppointmentAttendantsInfo($appointmentAttendantsInfo);
    }
    /**
     * Get AppointmentAttendantsInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo[]
     */
    public function getAppointmentAttendantsInfo(): ?array
    {
        return $this->AppointmentAttendantsInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAppointmentAttendantsInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppointmentAttendantsInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppointmentAttendantsInfoForArrayConstraintFromSetAppointmentAttendantsInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAppointmentAttendantsInfoAppointmentAttendantsInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAppointmentAttendantsInfoAppointmentAttendantsInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo) {
                $invalidValues[] = is_object($arrayOfAppointmentAttendantsInfoAppointmentAttendantsInfoItem) ? get_class($arrayOfAppointmentAttendantsInfoAppointmentAttendantsInfoItem) : sprintf('%s(%s)', gettype($arrayOfAppointmentAttendantsInfoAppointmentAttendantsInfoItem), var_export($arrayOfAppointmentAttendantsInfoAppointmentAttendantsInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AppointmentAttendantsInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AppointmentAttendantsInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo[] $appointmentAttendantsInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo
     */
    public function setAppointmentAttendantsInfo(?array $appointmentAttendantsInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($appointmentAttendantsInfoArrayErrorMessage = self::validateAppointmentAttendantsInfoForArrayConstraintFromSetAppointmentAttendantsInfo($appointmentAttendantsInfo))) {
            throw new InvalidArgumentException($appointmentAttendantsInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($appointmentAttendantsInfo) || (is_array($appointmentAttendantsInfo) && empty($appointmentAttendantsInfo))) {
            unset($this->AppointmentAttendantsInfo);
        } else {
            $this->AppointmentAttendantsInfo = $appointmentAttendantsInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\ArrayType\ArrayOfAppointmentAttendantsInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo) {
            throw new InvalidArgumentException(sprintf('The AppointmentAttendantsInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\StructType\AppointmentAttendantsInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AppointmentAttendantsInfo
     */
    public function getAttributeName(): string
    {
        return 'AppointmentAttendantsInfo';
    }
}
