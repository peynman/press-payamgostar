<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User;

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
            'UserInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UserInfo',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\OperationResult',
            'ArrayOfLineInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\ArrayType\\ArrayOfLineInfo',
            'LineInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\LineInfo',
            'ArrayOfUserGroupInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\ArrayType\\ArrayOfUserGroupInfo',
            'UserGroupInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UserGroupInfo',
            'UserTelephonySystemInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UserTelephonySystemInfo',
            'ArrayOfTelephonySystemInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\ArrayType\\ArrayOfTelephonySystemInfo',
            'TelephonySystemInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\TelephonySystemInfo',
            'ArrayOfTelephonySystemExtensionInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\ArrayType\\ArrayOfTelephonySystemExtensionInfo',
            'TelephonySystemExtensionInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\TelephonySystemExtensionInfo',
            'UserHelperExtensionInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UserHelperExtensionInfo',
            'UserInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UserInfoResult',
            'ArrayOfUserInfoItem' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\ArrayType\\ArrayOfUserInfoItem',
            'UserInfoItem' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UserInfoItem',
            'GetUser' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUser',
            'GetUserResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserResponse',
            'GetUserByExtension' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserByExtension',
            'GetUserByExtensionResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserByExtensionResponse',
            'GetUserByIdentityId' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserByIdentityId',
            'GetUserByIdentityIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserByIdentityIdResponse',
            'GetUserExtensions' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserExtensions',
            'GetUserExtensionsResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserExtensionsResponse',
            'CheckUserAuthentication' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\CheckUserAuthentication',
            'CheckUserAuthenticationResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\CheckUserAuthenticationResponse',
            'UpdateTelephonyPassword' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UpdateTelephonyPassword',
            'UpdateTelephonyPasswordResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\UpdateTelephonyPasswordResponse',
            'GetUserHelperExtensionBy' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserHelperExtensionBy',
            'GetUserHelperExtensionByResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserHelperExtensionByResponse',
            'GetUserList' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserList',
            'GetUserListResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\GetUserListResponse',
            'ResendRecoverPasswordEmail' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\ResendRecoverPasswordEmail',
            'ResendRecoverPasswordEmailResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\User\\StructType\\ResendRecoverPasswordEmailResponse',
        ];
    }
}
