<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AppointmentStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AppointmentStatus
 * @subpackage Enumerations
 */
class AppointmentStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Started'
     * @return string 'Started'
     */
    const VALUE_STARTED = 'Started';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Blocked'
     * @return string 'Blocked'
     */
    const VALUE_BLOCKED = 'Blocked';
    /**
     * Constant for value 'Archived'
     * @return string 'Archived'
     */
    const VALUE_ARCHIVED = 'Archived';
    /**
     * Return allowed values
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_STARTED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_BLOCKED
     * @uses self::VALUE_ARCHIVED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PENDING,
            self::VALUE_STARTED,
            self::VALUE_CANCELLED,
            self::VALUE_BLOCKED,
            self::VALUE_ARCHIVED,
        ];
    }
}
