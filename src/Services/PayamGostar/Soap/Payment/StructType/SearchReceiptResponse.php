<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchReceiptResponse StructType
 * @subpackage Structs
 */
class SearchReceiptResponse extends AbstractStructBase
{
    /**
     * The SearchReceiptResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $SearchReceiptResult = null;
    /**
     * Constructor method for SearchReceiptResponse
     * @uses SearchReceiptResponse::setSearchReceiptResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchReceiptResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchReceiptResult = null)
    {
        $this
            ->setSearchReceiptResult($searchReceiptResult);
    }
    /**
     * Get SearchReceiptResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    public function getSearchReceiptResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
    {
        return $this->SearchReceiptResult ?? null;
    }
    /**
     * Set SearchReceiptResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchReceiptResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchReceiptResponse
     */
    public function setSearchReceiptResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $searchReceiptResult = null): self
    {
        if (is_null($searchReceiptResult) || (is_array($searchReceiptResult) && empty($searchReceiptResult))) {
            unset($this->SearchReceiptResult);
        } else {
            $this->SearchReceiptResult = $searchReceiptResult;
        }
        
        return $this;
    }
}
