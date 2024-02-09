<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\ArrayType\\ArrayOfstring',
            'TicketInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\TicketInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfActiveProcessLifePathInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\ArrayType\\ArrayOfActiveProcessLifePathInfo',
            'ActiveProcessLifePathInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\ActiveProcessLifePathInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\OperationResult',
            'TicketInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\TicketInfoResult',
            'ArrayOfTicketInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\ArrayType\\ArrayOfTicketInfo',
            'TicketInfoHistoryResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\TicketInfoHistoryResult',
            'ArrayOfTicketInfoHistory' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\ArrayType\\ArrayOfTicketInfoHistory',
            'TicketInfoHistory' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\TicketInfoHistory',
            'ArrayOfFileInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\ArrayType\\ArrayOfFileInfo',
            'FileInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\FileInfo',
            'TicketsHistoryFileResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\TicketsHistoryFileResult',
            'Saveticket' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\Saveticket',
            'SaveticketResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\SaveticketResponse',
            'SearchTicket' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\SearchTicket',
            'SearchTicketResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\SearchTicketResponse',
            'FindTicketById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\FindTicketById',
            'FindTicketByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\FindTicketByIdResponse',
            'DeleteTicketById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\DeleteTicketById',
            'DeleteTicketByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\DeleteTicketByIdResponse',
            'GetHistoryByTicketId' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\GetHistoryByTicketId',
            'GetHistoryByTicketIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\GetHistoryByTicketIdResponse',
            'SaveTicketHistory' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\SaveTicketHistory',
            'SaveTicketHistoryResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\SaveTicketHistoryResponse',
            'GetTicketFile' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\GetTicketFile',
            'GetTicketFileResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Ticket\\StructType\\GetTicketFileResponse',
        ];
    }
}
