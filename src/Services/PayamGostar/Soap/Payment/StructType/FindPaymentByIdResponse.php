<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPaymentByIdResponse StructType
 * @subpackage Structs
 */
class FindPaymentByIdResponse extends AbstractStructBase
{
    /**
     * The FindPaymentByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $FindPaymentByIdResult = null;
    /**
     * Constructor method for FindPaymentByIdResponse
     * @uses FindPaymentByIdResponse::setFindPaymentByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByIdResult = null)
    {
        $this
            ->setFindPaymentByIdResult($findPaymentByIdResult);
    }
    /**
     * Get FindPaymentByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    public function getFindPaymentByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
    {
        return $this->FindPaymentByIdResult ?? null;
    }
    /**
     * Set FindPaymentByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByIdResponse
     */
    public function setFindPaymentByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByIdResult = null): self
    {
        if (is_null($findPaymentByIdResult) || (is_array($findPaymentByIdResult) && empty($findPaymentByIdResult))) {
            unset($this->FindPaymentByIdResult);
        } else {
            $this->FindPaymentByIdResult = $findPaymentByIdResult;
        }
        
        return $this;
    }
}
