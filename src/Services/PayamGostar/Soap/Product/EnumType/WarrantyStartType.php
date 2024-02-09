<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WarrantyStartType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WarrantyStartType
 * @subpackage Enumerations
 */
class WarrantyStartType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ExactlyDate'
     * @return string 'ExactlyDate'
     */
    const VALUE_EXACTLY_DATE = 'ExactlyDate';
    /**
     * Constant for value 'OnOutputTransaction'
     * @return string 'OnOutputTransaction'
     */
    const VALUE_ON_OUTPUT_TRANSACTION = 'OnOutputTransaction';
    /**
     * Constant for value 'OnRegister'
     * @return string 'OnRegister'
     */
    const VALUE_ON_REGISTER = 'OnRegister';
    /**
     * Constant for value 'ProductVerification'
     * @return string 'ProductVerification'
     */
    const VALUE_PRODUCT_VERIFICATION = 'ProductVerification';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_EXACTLY_DATE
     * @uses self::VALUE_ON_OUTPUT_TRANSACTION
     * @uses self::VALUE_ON_REGISTER
     * @uses self::VALUE_PRODUCT_VERIFICATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_EXACTLY_DATE,
            self::VALUE_ON_OUTPUT_TRANSACTION,
            self::VALUE_ON_REGISTER,
            self::VALUE_PRODUCT_VERIFICATION,
        ];
    }
}
