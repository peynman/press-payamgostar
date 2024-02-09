<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchReturnPurchaseInvoiceResponse StructType
 * @subpackage Structs
 */
class SearchReturnPurchaseInvoiceResponse extends AbstractStructBase
{
    /**
     * The SearchReturnPurchaseInvoiceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $SearchReturnPurchaseInvoiceResult = null;
    /**
     * Constructor method for SearchReturnPurchaseInvoiceResponse
     * @uses SearchReturnPurchaseInvoiceResponse::setSearchReturnPurchaseInvoiceResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnPurchaseInvoiceResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnPurchaseInvoiceResult = null)
    {
        $this
            ->setSearchReturnPurchaseInvoiceResult($searchReturnPurchaseInvoiceResult);
    }
    /**
     * Get SearchReturnPurchaseInvoiceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getSearchReturnPurchaseInvoiceResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->SearchReturnPurchaseInvoiceResult ?? null;
    }
    /**
     * Set SearchReturnPurchaseInvoiceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnPurchaseInvoiceResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoiceResponse
     */
    public function setSearchReturnPurchaseInvoiceResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnPurchaseInvoiceResult = null): self
    {
        if (is_null($searchReturnPurchaseInvoiceResult) || (is_array($searchReturnPurchaseInvoiceResult) && empty($searchReturnPurchaseInvoiceResult))) {
            unset($this->SearchReturnPurchaseInvoiceResult);
        } else {
            $this->SearchReturnPurchaseInvoiceResult = $searchReturnPurchaseInvoiceResult;
        }
        
        return $this;
    }
}
