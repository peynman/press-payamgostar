<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPaymentByNumberResponse StructType
 * @subpackage Structs
 */
class FindPaymentByNumberResponse extends AbstractStructBase
{
    /**
     * The FindPaymentByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $FindPaymentByNumberResult = null;
    /**
     * Constructor method for FindPaymentByNumberResponse
     * @uses FindPaymentByNumberResponse::setFindPaymentByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByNumberResult = null)
    {
        $this
            ->setFindPaymentByNumberResult($findPaymentByNumberResult);
    }
    /**
     * Get FindPaymentByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    public function getFindPaymentByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
    {
        return $this->FindPaymentByNumberResult ?? null;
    }
    /**
     * Set FindPaymentByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindPaymentByNumberResponse
     */
    public function setFindPaymentByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findPaymentByNumberResult = null): self
    {
        if (is_null($findPaymentByNumberResult) || (is_array($findPaymentByNumberResult) && empty($findPaymentByNumberResult))) {
            unset($this->FindPaymentByNumberResult);
        } else {
            $this->FindPaymentByNumberResult = $findPaymentByNumberResult;
        }
        
        return $this;
    }
}
