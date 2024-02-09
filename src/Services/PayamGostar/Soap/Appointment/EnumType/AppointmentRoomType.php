<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AppointmentRoomType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AppointmentRoomType
 * @subpackage Enumerations
 */
class AppointmentRoomType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'HostRoom'
     * @return string 'HostRoom'
     */
    const VALUE_HOST_ROOM = 'HostRoom';
    /**
     * Constant for value 'CustomerRoom'
     * @return string 'CustomerRoom'
     */
    const VALUE_CUSTOMER_ROOM = 'CustomerRoom';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_HOST_ROOM
     * @uses self::VALUE_CUSTOMER_ROOM
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HOST_ROOM,
            self::VALUE_CUSTOMER_ROOM,
            self::VALUE_OTHER,
        ];
    }
}
