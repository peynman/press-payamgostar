<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\EPay;

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
            'PaymentLinkInfo' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\EPay\\StructType\\PaymentLinkInfo',
            'PaymentLinkInfoResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\EPay\\StructType\\PaymentLinkInfoResult',
            'OperationResult' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\EPay\\StructType\\OperationResult',
            'CreatePaymentLink' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\EPay\\StructType\\CreatePaymentLink',
            'CreatePaymentLinkResponse' => '\\Larapress\\PayamGostar\\Services\\PayamGostar\\Soap\\EPay\\StructType\\CreatePaymentLinkResponse',
        ];
    }
}
