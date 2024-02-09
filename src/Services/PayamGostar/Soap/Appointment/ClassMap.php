<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\ArrayType\\ArrayOfstring',
            'AppointmentInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\AppointmentInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfAppointmentAttendantsInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\ArrayType\\ArrayOfAppointmentAttendantsInfo',
            'AppointmentAttendantsInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\AppointmentAttendantsInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\OperationResult',
            'AppointmentResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\AppointmentResult',
            'ArrayOfAppointmentInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\ArrayType\\ArrayOfAppointmentInfo',
            'SaveAppointment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SaveAppointment',
            'SaveAppointmentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SaveAppointmentResponse',
            'GetAppointment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\GetAppointment',
            'GetAppointmentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\GetAppointmentResponse',
            'SearchAppointment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SearchAppointment',
            'SearchAppointmentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SearchAppointmentResponse',
            'FindAppointmentById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\FindAppointmentById',
            'FindAppointmentByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\FindAppointmentByIdResponse',
            'DeleteAppointmentById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\DeleteAppointmentById',
            'DeleteAppointmentByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\DeleteAppointmentByIdResponse',
            'SendAppointmentNotifications' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SendAppointmentNotifications',
            'SendAppointmentNotificationsResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SendAppointmentNotificationsResponse',
            'SendCancelAppointmentNotifications' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SendCancelAppointmentNotifications',
            'SendCancelAppointmentNotificationsResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Appointment\\StructType\\SendCancelAppointmentNotificationsResponse',
        ];
    }
}
