<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\ArrayType\\ArrayOfstring',
            'ContractInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\ContractInfo',
            'BaseBillableObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\BaseBillableObjectInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\OperationResult',
            'ContractInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\ContractInfoResult',
            'ArrayOfContractInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\ArrayType\\ArrayOfContractInfo',
            'SaveContract' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\SaveContract',
            'SaveContractResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\SaveContractResponse',
            'SearchContract' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\SearchContract',
            'SearchContractResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\SearchContractResponse',
            'FindContractById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\FindContractById',
            'FindContractByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\FindContractByIdResponse',
            'DeleteContractById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\DeleteContractById',
            'DeleteContractByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\DeleteContractByIdResponse',
            'ApprovedContract' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\ApprovedContract',
            'ApprovedContractResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\ApprovedContractResponse',
            'RejectedContract' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\RejectedContract',
            'RejectedContractResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\RejectedContractResponse',
            'PendingContract' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\PendingContract',
            'PendingContractResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\PendingContractResponse',
            'NumberedContract' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\NumberedContract',
            'NumberedContractResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Contract\\StructType\\NumberedContractResponse',
        ];
    }
}
