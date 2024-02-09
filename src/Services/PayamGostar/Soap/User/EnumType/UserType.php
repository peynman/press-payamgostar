<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserType
 * @subpackage Enumerations
 */
class UserType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Operator'
     * @return string 'Operator'
     */
    const VALUE_OPERATOR = 'Operator';
    /**
     * Constant for value 'Supplier'
     * @return string 'Supplier'
     */
    const VALUE_SUPPLIER = 'Supplier';
    /**
     * Constant for value 'Customer'
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Constant for value 'Agent'
     * @return string 'Agent'
     */
    const VALUE_AGENT = 'Agent';
    /**
     * Constant for value 'Competitor'
     * @return string 'Competitor'
     */
    const VALUE_COMPETITOR = 'Competitor';
    /**
     * Return allowed values
     * @uses self::VALUE_OPERATOR
     * @uses self::VALUE_SUPPLIER
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_AGENT
     * @uses self::VALUE_COMPETITOR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPERATOR,
            self::VALUE_SUPPLIER,
            self::VALUE_CUSTOMER,
            self::VALUE_AGENT,
            self::VALUE_COMPETITOR,
        ];
    }
}
