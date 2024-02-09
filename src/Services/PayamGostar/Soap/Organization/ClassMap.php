<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfstring',
            'OrganizationInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\OrganizationInfo',
            'IdentityInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\IdentityInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfIdentityContactAddress' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfIdentityContactAddress',
            'IdentityContactAddress' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\IdentityContactAddress',
            'IdentityContact' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\IdentityContact',
            'ArrayOfCategoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfCategoryInfo',
            'CategoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\CategoryInfo',
            'ArrayOfIdentityContactPhone' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfIdentityContactPhone',
            'IdentityContactPhone' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\IdentityContactPhone',
            'PersonInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\PersonInfo',
            'ArrayOfEmployeeInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfEmployeeInfo',
            'EmployeeInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\EmployeeInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\OperationResult',
            'OrganizationInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\OrganizationInfoResult',
            'ArrayOfOrganizationInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\ArrayType\\ArrayOfOrganizationInfo',
            'SaveOrganization' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\SaveOrganization',
            'SaveOrganizationResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\SaveOrganizationResponse',
            'SearchOrganization' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\SearchOrganization',
            'SearchOrganizationResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\SearchOrganizationResponse',
            'FindOrganizationById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\FindOrganizationById',
            'FindOrganizationByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\FindOrganizationByIdResponse',
            'DeleteOrganizationById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\DeleteOrganizationById',
            'DeleteOrganizationByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\DeleteOrganizationByIdResponse',
            'GetOrganizationByPhoneNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\GetOrganizationByPhoneNumber',
            'GetOrganizationByPhoneNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Organization\\StructType\\GetOrganizationByPhoneNumberResponse',
        ];
    }
}
