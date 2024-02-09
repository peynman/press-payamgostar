<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\ArrayType\\ArrayOfstring',
            'FormInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\FormInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\OperationResult',
            'FormInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\FormInfoResult',
            'ArrayOfFormInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\ArrayType\\ArrayOfFormInfo',
            'SaveForm' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\SaveForm',
            'SaveFormResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\SaveFormResponse',
            'SearchForm' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\SearchForm',
            'SearchFormResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\SearchFormResponse',
            'FindFormById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\FindFormById',
            'FindFormByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\FindFormByIdResponse',
            'DeleteFormById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\DeleteFormById',
            'DeleteFormByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Form\\StructType\\DeleteFormByIdResponse',
        ];
    }
}
