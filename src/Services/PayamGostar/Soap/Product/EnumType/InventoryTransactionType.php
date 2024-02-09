<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InventoryTransactionType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InventoryTransactionType
 * @subpackage Enumerations
 */
class InventoryTransactionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Input'
     * @return string 'Input'
     */
    const VALUE_INPUT = 'Input';
    /**
     * Constant for value 'Output'
     * @return string 'Output'
     */
    const VALUE_OUTPUT = 'Output';
    /**
     * Return allowed values
     * @uses self::VALUE_INPUT
     * @uses self::VALUE_OUTPUT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INPUT,
            self::VALUE_OUTPUT,
        ];
    }
}
