<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\ArrayType\\ArrayOfstring',
            'PhoneLogInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\PhoneLogInfoResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\OperationResult',
            'PhoneLogInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\PhoneLogInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfPhoneLogInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\ArrayType\\ArrayOfPhoneLogInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\SaveCrmObjectResult',
            'SearchPhoneLog' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\SearchPhoneLog',
            'SearchPhoneLogResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\SearchPhoneLogResponse',
            'FindPhoneLogById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\FindPhoneLogById',
            'FindPhoneLogByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\FindPhoneLogByIdResponse',
            'DeletePhoneLogById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\DeletePhoneLogById',
            'DeletePhoneLogByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\PhoneLog\\StructType\\DeletePhoneLogByIdResponse',
        ];
    }
}
