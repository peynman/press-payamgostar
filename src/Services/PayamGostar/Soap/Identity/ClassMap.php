<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfstring',
            'IdentityInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\IdentityInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfIdentityContactAddress' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfIdentityContactAddress',
            'IdentityContactAddress' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\IdentityContactAddress',
            'IdentityContact' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\IdentityContact',
            'ArrayOfCategoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfCategoryInfo',
            'CategoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\CategoryInfo',
            'ArrayOfIdentityContactPhone' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfIdentityContactPhone',
            'IdentityContactPhone' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\IdentityContactPhone',
            'PersonInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\PersonInfo',
            'ArrayOfEmployeeInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfEmployeeInfo',
            'EmployeeInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\EmployeeInfo',
            'OrganizationInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\OrganizationInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\OperationResult',
            'IdentityInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\IdentityInfoResult',
            'ArrayOfIdentityInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\ArrayType\\ArrayOfIdentityInfo',
            'SaveIdentity' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\SaveIdentity',
            'SaveIdentityResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\SaveIdentityResponse',
            'SearchIdentity' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\SearchIdentity',
            'SearchIdentityResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\SearchIdentityResponse',
            'FindIdentityById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\FindIdentityById',
            'FindIdentityByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\FindIdentityByIdResponse',
            'DeleteIdentityById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\DeleteIdentityById',
            'DeleteIdentityByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\DeleteIdentityByIdResponse',
            'FindIdentityByPhoneNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\FindIdentityByPhoneNumber',
            'FindIdentityByPhoneNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Identity\\StructType\\FindIdentityByPhoneNumberResponse',
        ];
    }
}
