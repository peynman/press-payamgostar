<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductItemInventoryStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductItemInventoryStatus
 * @subpackage Enumerations
 */
class ProductItemInventoryStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'PendingEnterToInventory'
     * @return string 'PendingEnterToInventory'
     */
    const VALUE_PENDING_ENTER_TO_INVENTORY = 'PendingEnterToInventory';
    /**
     * Constant for value 'PendingExitFromInventory'
     * @return string 'PendingExitFromInventory'
     */
    const VALUE_PENDING_EXIT_FROM_INVENTORY = 'PendingExitFromInventory';
    /**
     * Constant for value 'PendingDispose'
     * @return string 'PendingDispose'
     */
    const VALUE_PENDING_DISPOSE = 'PendingDispose';
    /**
     * Constant for value 'Disposed'
     * @return string 'Disposed'
     */
    const VALUE_DISPOSED = 'Disposed';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_PENDING_ENTER_TO_INVENTORY
     * @uses self::VALUE_PENDING_EXIT_FROM_INVENTORY
     * @uses self::VALUE_PENDING_DISPOSE
     * @uses self::VALUE_DISPOSED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABLE,
            self::VALUE_DELIVERED,
            self::VALUE_PENDING_ENTER_TO_INVENTORY,
            self::VALUE_PENDING_EXIT_FROM_INVENTORY,
            self::VALUE_PENDING_DISPOSE,
            self::VALUE_DISPOSED,
        ];
    }
}
