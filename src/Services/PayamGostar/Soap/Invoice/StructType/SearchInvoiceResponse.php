<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchInvoiceResponse StructType
 * @subpackage Structs
 */
class SearchInvoiceResponse extends AbstractStructBase
{
    /**
     * The SearchInvoiceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $SearchInvoiceResult = null;
    /**
     * Constructor method for SearchInvoiceResponse
     * @uses SearchInvoiceResponse::setSearchInvoiceResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchInvoiceResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchInvoiceResult = null)
    {
        $this
            ->setSearchInvoiceResult($searchInvoiceResult);
    }
    /**
     * Get SearchInvoiceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getSearchInvoiceResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->SearchInvoiceResult ?? null;
    }
    /**
     * Set SearchInvoiceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchInvoiceResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchInvoiceResponse
     */
    public function setSearchInvoiceResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchInvoiceResult = null): self
    {
        if (is_null($searchInvoiceResult) || (is_array($searchInvoiceResult) && empty($searchInvoiceResult))) {
            unset($this->SearchInvoiceResult);
        } else {
            $this->SearchInvoiceResult = $searchInvoiceResult;
        }
        
        return $this;
    }
}
