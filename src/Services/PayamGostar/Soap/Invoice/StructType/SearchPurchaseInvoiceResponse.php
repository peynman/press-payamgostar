<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPurchaseInvoiceResponse StructType
 * @subpackage Structs
 */
class SearchPurchaseInvoiceResponse extends AbstractStructBase
{
    /**
     * The SearchPurchaseInvoiceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $SearchPurchaseInvoiceResult = null;
    /**
     * Constructor method for SearchPurchaseInvoiceResponse
     * @uses SearchPurchaseInvoiceResponse::setSearchPurchaseInvoiceResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseInvoiceResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseInvoiceResult = null)
    {
        $this
            ->setSearchPurchaseInvoiceResult($searchPurchaseInvoiceResult);
    }
    /**
     * Get SearchPurchaseInvoiceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getSearchPurchaseInvoiceResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->SearchPurchaseInvoiceResult ?? null;
    }
    /**
     * Set SearchPurchaseInvoiceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseInvoiceResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchPurchaseInvoiceResponse
     */
    public function setSearchPurchaseInvoiceResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchPurchaseInvoiceResult = null): self
    {
        if (is_null($searchPurchaseInvoiceResult) || (is_array($searchPurchaseInvoiceResult) && empty($searchPurchaseInvoiceResult))) {
            unset($this->SearchPurchaseInvoiceResult);
        } else {
            $this->SearchPurchaseInvoiceResult = $searchPurchaseInvoiceResult;
        }
        
        return $this;
    }
}
