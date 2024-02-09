<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePaymentLinkResponse StructType
 * @subpackage Structs
 */
class CreatePaymentLinkResponse extends AbstractStructBase
{
    /**
     * The CreatePaymentLinkResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult $CreatePaymentLinkResult = null;
    /**
     * Constructor method for CreatePaymentLinkResponse
     * @uses CreatePaymentLinkResponse::setCreatePaymentLinkResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult $createPaymentLinkResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult $createPaymentLinkResult = null)
    {
        $this
            ->setCreatePaymentLinkResult($createPaymentLinkResult);
    }
    /**
     * Get CreatePaymentLinkResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult|null
     */
    public function getCreatePaymentLinkResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult
    {
        return $this->CreatePaymentLinkResult ?? null;
    }
    /**
     * Set CreatePaymentLinkResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult $createPaymentLinkResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLinkResponse
     */
    public function setCreatePaymentLinkResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult $createPaymentLinkResult = null): self
    {
        if (is_null($createPaymentLinkResult) || (is_array($createPaymentLinkResult) && empty($createPaymentLinkResult))) {
            unset($this->CreatePaymentLinkResult);
        } else {
            $this->CreatePaymentLinkResult = $createPaymentLinkResult;
        }
        
        return $this;
    }
}
