<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MediaType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MediaType
 * @subpackage Enumerations
 */
class MediaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sms'
     * @return string 'Sms'
     */
    const VALUE_SMS = 'Sms';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'Fax'
     * @return string 'Fax'
     */
    const VALUE_FAX = 'Fax';
    /**
     * Constant for value 'Print'
     * @return string 'Print'
     */
    const VALUE_PRINT = 'Print';
    /**
     * Constant for value 'SocialSms'
     * @return string 'SocialSms'
     */
    const VALUE_SOCIAL_SMS = 'SocialSms';
    /**
     * Return allowed values
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_FAX
     * @uses self::VALUE_PRINT
     * @uses self::VALUE_SOCIAL_SMS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SMS,
            self::VALUE_EMAIL,
            self::VALUE_FAX,
            self::VALUE_PRINT,
            self::VALUE_SOCIAL_SMS,
        ];
    }
}
