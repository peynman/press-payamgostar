<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\ArrayType\\ArrayOfstring',
            'OpportunityInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\OpportunityInfoResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\OperationResult',
            'OpportunityInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\OpportunityInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfOpportunityProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\ArrayType\\ArrayOfOpportunityProductInfo',
            'OpportunityProductInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\OpportunityProductInfo',
            'ArrayOfOpportunityInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\ArrayType\\ArrayOfOpportunityInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\SaveCrmObjectResult',
            'SearchOpportunity' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\SearchOpportunity',
            'SearchOpportunityResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\SearchOpportunityResponse',
            'FindOpportunityById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\FindOpportunityById',
            'FindOpportunityByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\FindOpportunityByIdResponse',
            'DeleteOpportunityById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\DeleteOpportunityById',
            'DeleteOpportunityByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\DeleteOpportunityByIdResponse',
            'SaveOpportunity' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\SaveOpportunity',
            'SaveOpportunityResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Opportunity\\StructType\\SaveOpportunityResponse',
        ];
    }
}
