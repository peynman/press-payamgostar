<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList;

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
            'PriceListInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\PriceListInfo',
            'ArrayOfPriceListProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\ArrayType\\ArrayOfPriceListProductInfo',
            'PriceListProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\PriceListProductInfo',
            'PriceListSaveResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\PriceListSaveResult',
            'SavePriceList' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\SavePriceList',
            'SavePriceListResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\SavePriceListResponse',
            'DeletePriceList' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\DeletePriceList',
            'DeletePriceListResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PriceList\\StructType\\DeletePriceListResponse',
        ];
    }
}
