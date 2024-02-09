<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AttendantType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AttendantType
 * @subpackage Enumerations
 */
class AttendantType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Identity'
     * @return string 'Identity'
     */
    const VALUE_IDENTITY = 'Identity';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'Phone'
     * @return string 'Phone'
     */
    const VALUE_PHONE = 'Phone';
    /**
     * Constant for value 'User'
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Return allowed values
     * @uses self::VALUE_IDENTITY
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_USER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IDENTITY,
            self::VALUE_EMAIL,
            self::VALUE_PHONE,
            self::VALUE_USER,
        ];
    }
}
