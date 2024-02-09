<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductItemStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductItemStatus
 * @subpackage Enumerations
 */
class ProductItemStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Healthy'
     * @return string 'Healthy'
     */
    const VALUE_HEALTHY = 'Healthy';
    /**
     * Constant for value 'Bad'
     * @return string 'Bad'
     */
    const VALUE_BAD = 'Bad';
    /**
     * Constant for value 'Repair'
     * @return string 'Repair'
     */
    const VALUE_REPAIR = 'Repair';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Return allowed values
     * @uses self::VALUE_HEALTHY
     * @uses self::VALUE_BAD
     * @uses self::VALUE_REPAIR
     * @uses self::VALUE_RETURN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HEALTHY,
            self::VALUE_BAD,
            self::VALUE_REPAIR,
            self::VALUE_RETURN,
        ];
    }
}
