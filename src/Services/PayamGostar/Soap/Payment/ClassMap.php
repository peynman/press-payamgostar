<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment;

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
            'ArrayOfstring' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\ArrayType\\ArrayOfstring',
            'PaymentInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\PaymentInfo',
            'BaseBillableObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\BaseBillableObjectInfo',
            'GeneralCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\GeneralCrmObjectInfo',
            'BaseCrmObjectInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\BaseCrmObjectInfo',
            'ArrayOfBaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\ArrayType\\ArrayOfBaseCrmObjectExtendedPropertyInfo',
            'BaseCrmObjectExtendedPropertyInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\BaseCrmObjectExtendedPropertyInfo',
            'RelatedInvoiceInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\RelatedInvoiceInfo',
            'SaveCrmObjectResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SaveCrmObjectResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\OperationResult',
            'PaymentInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\PaymentInfoResult',
            'ArrayOfPaymentInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\ArrayType\\ArrayOfPaymentInfo',
            'SavePayment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SavePayment',
            'SavePaymentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SavePaymentResponse',
            'DeletePaymentById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\DeletePaymentById',
            'DeletePaymentByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\DeletePaymentByIdResponse',
            'DeletePaymentByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\DeletePaymentByNumber',
            'DeletePaymentByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\DeletePaymentByNumberResponse',
            'FindPaymentByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindPaymentByNumber',
            'FindPaymentByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindPaymentByNumberResponse',
            'DeleteReceiptByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\DeleteReceiptByNumber',
            'DeleteReceiptByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\DeleteReceiptByNumberResponse',
            'FindReceiptByNumber' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindReceiptByNumber',
            'FindReceiptByNumberResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindReceiptByNumberResponse',
            'SearchPayment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SearchPayment',
            'SearchPaymentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SearchPaymentResponse',
            'SearchReceipt' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SearchReceipt',
            'SearchReceiptResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\SearchReceiptResponse',
            'FindPaymentById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindPaymentById',
            'FindPaymentByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindPaymentByIdResponse',
            'FindReceiptById' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindReceiptById',
            'FindReceiptByIdResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\FindReceiptByIdResponse',
            'ApprovedPayment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\ApprovedPayment',
            'ApprovedPaymentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\ApprovedPaymentResponse',
            'RejectedPayment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\RejectedPayment',
            'RejectedPaymentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\RejectedPaymentResponse',
            'PendingPayment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\PendingPayment',
            'PendingPaymentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\PendingPaymentResponse',
            'NumberedPayment' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\NumberedPayment',
            'NumberedPaymentResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\Payment\\StructType\\NumberedPaymentResponse',
        ];
    }
}
