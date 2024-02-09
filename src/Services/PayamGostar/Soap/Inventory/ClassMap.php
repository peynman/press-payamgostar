<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'InventoryInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Inventory\\StructType\\InventoryInfoResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Inventory\\StructType\\OperationResult',
            'ArrayOfInventoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Inventory\\ArrayType\\ArrayOfInventoryInfo',
            'InventoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Inventory\\StructType\\InventoryInfo',
            'GetRemainingStock' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Inventory\\StructType\\GetRemainingStock',
            'GetRemainingStockResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Inventory\\StructType\\GetRemainingStockResponse',
        ];
    }
}
