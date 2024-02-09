<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchQuoteResponse StructType
 * @subpackage Structs
 */
class SearchQuoteResponse extends AbstractStructBase
{
    /**
     * The SearchQuoteResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $SearchQuoteResult = null;
    /**
     * Constructor method for SearchQuoteResponse
     * @uses SearchQuoteResponse::setSearchQuoteResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchQuoteResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchQuoteResult = null)
    {
        $this
            ->setSearchQuoteResult($searchQuoteResult);
    }
    /**
     * Get SearchQuoteResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getSearchQuoteResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->SearchQuoteResult ?? null;
    }
    /**
     * Set SearchQuoteResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchQuoteResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchQuoteResponse
     */
    public function setSearchQuoteResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchQuoteResult = null): self
    {
        if (is_null($searchQuoteResult) || (is_array($searchQuoteResult) && empty($searchQuoteResult))) {
            unset($this->SearchQuoteResult);
        } else {
            $this->SearchQuoteResult = $searchQuoteResult;
        }
        
        return $this;
    }
}
