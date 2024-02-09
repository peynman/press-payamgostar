<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentInfoResult
 * @subpackage Structs
 */
class PaymentInfoResult extends OperationResult
{
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $PaymentInfo = null;
    /**
     * The PaymentInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo $PaymentInfoList = null;
    /**
     * Constructor method for PaymentInfoResult
     * @uses PaymentInfoResult::setPaymentInfo()
     * @uses PaymentInfoResult::setPaymentInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo $paymentInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo $paymentInfoList = null)
    {
        $this
            ->setPaymentInfo($paymentInfo)
            ->setPaymentInfoList($paymentInfoList);
    }
    /**
     * Get PaymentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function getPaymentInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return $this->PaymentInfo ?? null;
    }
    /**
     * Set PaymentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
     */
    public function setPaymentInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo = null): self
    {
        if (is_null($paymentInfo) || (is_array($paymentInfo) && empty($paymentInfo))) {
            unset($this->PaymentInfo);
        } else {
            $this->PaymentInfo = $paymentInfo;
        }
        
        return $this;
    }
    /**
     * Get PaymentInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo|null
     */
    public function getPaymentInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo
    {
        return $this->PaymentInfoList ?? null;
    }
    /**
     * Set PaymentInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo $paymentInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
     */
    public function setPaymentInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\ArrayType\ArrayOfPaymentInfo $paymentInfoList = null): self
    {
        if (is_null($paymentInfoList) || (is_array($paymentInfoList) && empty($paymentInfoList))) {
            unset($this->PaymentInfoList);
        } else {
            $this->PaymentInfoList = $paymentInfoList;
        }
        
        return $this;
    }
}
