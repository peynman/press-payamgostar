<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPurchaseQuoteResponse StructType
 * @subpackage Structs
 */
class SearchPurchaseQuoteResponse extends AbstractStructBase
{
    /**
     * The SearchPurchaseQuoteResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $SearchPurchaseQuoteResult = null;
    /**
     * Constructor method for SearchPurchaseQuoteResponse
     * @uses SearchPurchaseQuoteResponse::setSearchPurchaseQuoteResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseQuoteResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseQuoteResult = null)
    {
        $this
            ->setSearchPurchaseQuoteResult($searchPurchaseQuoteResult);
    }
    /**
     * Get SearchPurchaseQuoteResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getSearchPurchaseQuoteResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->SearchPurchaseQuoteResult ?? null;
    }
    /**
     * Set SearchPurchaseQuoteResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseQuoteResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseQuoteResponse
     */
    public function setSearchPurchaseQuoteResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseQuoteResult = null): self
    {
        if (is_null($searchPurchaseQuoteResult) || (is_array($searchPurchaseQuoteResult) && empty($searchPurchaseQuoteResult))) {
            unset($this->SearchPurchaseQuoteResult);
        } else {
            $this->SearchPurchaseQuoteResult = $searchPurchaseQuoteResult;
        }
        
        return $this;
    }
}
