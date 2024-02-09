<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Gp_InvoiceType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Gp_InvoiceType
 * @subpackage Enumerations
 */
class Gp_InvoiceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'Quote'
     * @return string 'Quote'
     */
    const VALUE_QUOTE = 'Quote';
    /**
     * Return allowed values
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_QUOTE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVOICE,
            self::VALUE_QUOTE,
        ];
    }
}
