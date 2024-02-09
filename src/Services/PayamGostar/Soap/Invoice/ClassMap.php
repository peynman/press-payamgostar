<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\ArrayType\\ArrayOfstring',
            'InvoiceInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\InvoiceInfo',
            'BaseBillableObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\BaseBillableObjectInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'ArrayOfInvoiceDetailInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\ArrayType\\ArrayOfInvoiceDetailInfo',
            'InvoiceDetailInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\InvoiceDetailInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\OperationResult',
            'ReturnInvoiceInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\ReturnInvoiceInfo',
            'ArrayOfReturnInvoiceDetailInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\ArrayType\\ArrayOfReturnInvoiceDetailInfo',
            'ReturnInvoiceDetailInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\ReturnInvoiceDetailInfo',
            'ArrayOfRelatedReturnInvoiceDetailInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\ArrayType\\ArrayOfRelatedReturnInvoiceDetailInfo',
            'RelatedReturnInvoiceDetailInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\RelatedReturnInvoiceDetailInfo',
            'RelatedInvoiceInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\RelatedInvoiceInfo',
            'InvoiceInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\InvoiceInfoResult',
            'ArrayOfInvoiceInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\ArrayType\\ArrayOfInvoiceInfo',
            'SaveInvoice' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SaveInvoice',
            'SaveInvoiceResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SaveInvoiceResponse',
            'SaveReturnInvoice' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SaveReturnInvoice',
            'SaveReturnInvoiceResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SaveReturnInvoiceResponse',
            'FindInvoiceById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindInvoiceById',
            'FindInvoiceByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindInvoiceByIdResponse',
            'FindPurchaseInvoiceById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindPurchaseInvoiceById',
            'FindPurchaseInvoiceByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindPurchaseInvoiceByIdResponse',
            'FindReturnPurchaseInvoiceById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindReturnPurchaseInvoiceById',
            'FindReturnPurchaseInvoiceByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindReturnPurchaseInvoiceByIdResponse',
            'FindQuoteById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindQuoteById',
            'FindQuoteByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindQuoteByIdResponse',
            'FindPurchaseQuoteById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindPurchaseQuoteById',
            'FindPurchaseQuoteByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindPurchaseQuoteByIdResponse',
            'FindReturnInvoiceById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindReturnInvoiceById',
            'FindReturnInvoiceByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindReturnInvoiceByIdResponse',
            'FindInvoiceByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindInvoiceByNumber',
            'FindInvoiceByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindInvoiceByNumberResponse',
            'FindReturnInvoiceByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindReturnInvoiceByNumber',
            'FindReturnInvoiceByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\FindReturnInvoiceByNumberResponse',
            'DeleteInvoiceById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\DeleteInvoiceById',
            'DeleteInvoiceByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\DeleteInvoiceByIdResponse',
            'DeleteInvoiceByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\DeleteInvoiceByNumber',
            'DeleteInvoiceByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\DeleteInvoiceByNumberResponse',
            'DeleteReturnInvoiceByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\DeleteReturnInvoiceByNumber',
            'DeleteReturnInvoiceByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\DeleteReturnInvoiceByNumberResponse',
            'SearchInvoice' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchInvoice',
            'SearchInvoiceResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchInvoiceResponse',
            'SearchQuote' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchQuote',
            'SearchQuoteResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchQuoteResponse',
            'SearchPurchaseInvoice' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchPurchaseInvoice',
            'SearchPurchaseInvoiceResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchPurchaseInvoiceResponse',
            'SearchReturnPurchaseInvoice' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchReturnPurchaseInvoice',
            'SearchReturnPurchaseInvoiceResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchReturnPurchaseInvoiceResponse',
            'SearchReturnSaleInvoice' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchReturnSaleInvoice',
            'SearchReturnSaleInvoiceResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchReturnSaleInvoiceResponse',
            'SearchPurchaseQuote' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchPurchaseQuote',
            'SearchPurchaseQuoteResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\SearchPurchaseQuoteResponse',
            'GetInvoicesByIdentityId' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\GetInvoicesByIdentityId',
            'GetInvoicesByIdentityIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\GetInvoicesByIdentityIdResponse',
            'Approved' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\Approved',
            'ApprovedResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\ApprovedResponse',
            'Rejected' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\Rejected',
            'RejectedResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\RejectedResponse',
            'Pending' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\Pending',
            'PendingResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\PendingResponse',
            'Numbered' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\Numbered',
            'NumberedResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Invoice\\StructType\\NumberedResponse',
        ];
    }
}
