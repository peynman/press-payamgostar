<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPaymentResponse StructType
 * @subpackage Structs
 */
class SearchPaymentResponse extends AbstractStructBase
{
    /**
     * The SearchPaymentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $SearchPaymentResult = null;
    /**
     * Constructor method for SearchPaymentResponse
     * @uses SearchPaymentResponse::setSearchPaymentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchPaymentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchPaymentResult = null)
    {
        $this
            ->setSearchPaymentResult($searchPaymentResult);
    }
    /**
     * Get SearchPaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    public function getSearchPaymentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
    {
        return $this->SearchPaymentResult ?? null;
    }
    /**
     * Set SearchPaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchPaymentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPaymentResponse
     */
    public function setSearchPaymentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchPaymentResult = null): self
    {
        if (is_null($searchPaymentResult) || (is_array($searchPaymentResult) && empty($searchPaymentResult))) {
            unset($this->SearchPaymentResult);
        } else {
            $this->SearchPaymentResult = $searchPaymentResult;
        }
        
        return $this;
    }
}
