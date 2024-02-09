<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\ArrayType\\ArrayOfstring',
            'BusinessNoteInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\BusinessNoteInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\OperationResult',
            'BusinessNoteResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\BusinessNoteResult',
            'SaveBusinessNote' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\SaveBusinessNote',
            'SaveBusinessNoteResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\SaveBusinessNoteResponse',
            'GetBusinessNote' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\GetBusinessNote',
            'GetBusinessNoteResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\BusinessNote\\StructType\\GetBusinessNoteResponse',
        ];
    }
}
