<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfstring',
            'PersonInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\PersonInfo',
            'IdentityInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\IdentityInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfIdentityContactAddress' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfIdentityContactAddress',
            'IdentityContactAddress' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\IdentityContactAddress',
            'IdentityContact' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\IdentityContact',
            'ArrayOfCategoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfCategoryInfo',
            'CategoryInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\CategoryInfo',
            'ArrayOfIdentityContactPhone' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfIdentityContactPhone',
            'IdentityContactPhone' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\IdentityContactPhone',
            'OrganizationInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\OrganizationInfo',
            'ArrayOfEmployeeInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfEmployeeInfo',
            'EmployeeInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\EmployeeInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\OperationResult',
            'PersonInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\PersonInfoResult',
            'ArrayOfPersonInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\ArrayType\\ArrayOfPersonInfo',
            'SavePerson' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\SavePerson',
            'SavePersonResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\SavePersonResponse',
            'SearchPerson' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\SearchPerson',
            'SearchPersonResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\SearchPersonResponse',
            'DeletePersonById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\DeletePersonById',
            'DeletePersonByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\DeletePersonByIdResponse',
            'FindPersonById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\FindPersonById',
            'FindPersonByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Person\\StructType\\FindPersonByIdResponse',
        ];
    }
}
