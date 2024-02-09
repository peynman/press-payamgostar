<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product;

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
            'ProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\ProductInfo',
            'ArrayOfPriceListInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\ArrayType\\ArrayOfPriceListInfo',
            'PriceListInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\PriceListInfo',
            'ArrayOfPriceListProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\ArrayType\\ArrayOfPriceListProductInfo',
            'PriceListProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\PriceListProductInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\OperationResult',
            'ProductInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\ProductInfoResult',
            'ArrayOfProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\ArrayType\\ArrayOfProductInfo',
            'ProductItemInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\ProductItemInfo',
            'ArrayOfProductItemHistory' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\ArrayType\\ArrayOfProductItemHistory',
            'ProductItemHistory' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\ProductItemHistory',
            'ProductGroupInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\ProductGroupInfo',
            'SaveProductGroupResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\SaveProductGroupResult',
            'ProductGroupResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\ProductGroupResult',
            'SaveProduct' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\SaveProduct',
            'SaveProductResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\SaveProductResponse',
            'FindProductByCode' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductByCode',
            'FindProductByCodeResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductByCodeResponse',
            'FindProductByName' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductByName',
            'FindProductByNameResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductByNameResponse',
            'DeleteProductById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\DeleteProductById',
            'DeleteProductByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\DeleteProductByIdResponse',
            'GetProductBySerialNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\GetProductBySerialNumber',
            'GetProductBySerialNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\GetProductBySerialNumberResponse',
            'DeleteProductByCode' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\DeleteProductByCode',
            'DeleteProductByCodeResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\DeleteProductByCodeResponse',
            'FindProductItem' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductItem',
            'FindProductItemResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductItemResponse',
            'SaveProductGroup' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\SaveProductGroup',
            'SaveProductGroupResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\SaveProductGroupResponse',
            'FindProductGroupById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductGroupById',
            'FindProductGroupByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductGroupByIdResponse',
            'FindProductById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductById',
            'FindProductByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Product\\StructType\\FindProductByIdResponse',
        ];
    }
}
