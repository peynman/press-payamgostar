<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\ArrayType\\ArrayOfstring',
            'TaskInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\TaskInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\OperationResult',
            'TaskInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\TaskInfoResult',
            'ArrayOfTaskInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\ArrayType\\ArrayOfTaskInfo',
            'SaveTask' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\SaveTask',
            'SaveTaskResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\SaveTaskResponse',
            'SearchTask' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\SearchTask',
            'SearchTaskResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\SearchTaskResponse',
            'FindTaskById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\FindTaskById',
            'FindTaskByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\FindTaskByIdResponse',
            'DeleteTaskById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\DeleteTaskById',
            'DeleteTaskByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Task\\StructType\\DeleteTaskByIdResponse',
        ];
    }
}
