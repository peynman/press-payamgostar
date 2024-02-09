<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransactionStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TransactionStatus
 * @subpackage Enumerations
 */
class TransactionStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Approved'
     * @return string 'Approved'
     */
    const VALUE_APPROVED = 'Approved';
    /**
     * Constant for value 'Rejected'
     * @return string 'Rejected'
     */
    const VALUE_REJECTED = 'Rejected';
    /**
     * Constant for value 'Pricing'
     * @return string 'Pricing'
     */
    const VALUE_PRICING = 'Pricing';
    /**
     * Constant for value 'Final'
     * @return string 'Final'
     */
    const VALUE_FINAL = 'Final';
    /**
     * Return allowed values
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_PRICING
     * @uses self::VALUE_FINAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PENDING,
            self::VALUE_APPROVED,
            self::VALUE_REJECTED,
            self::VALUE_PRICING,
            self::VALUE_FINAL,
        ];
    }
}
