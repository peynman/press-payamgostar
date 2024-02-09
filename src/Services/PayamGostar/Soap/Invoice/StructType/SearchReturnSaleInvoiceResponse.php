<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchReturnSaleInvoiceResponse StructType
 * @subpackage Structs
 */
class SearchReturnSaleInvoiceResponse extends AbstractStructBase
{
    /**
     * The SearchReturnSaleInvoiceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $SearchReturnSaleInvoiceResult = null;
    /**
     * Constructor method for SearchReturnSaleInvoiceResponse
     * @uses SearchReturnSaleInvoiceResponse::setSearchReturnSaleInvoiceResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnSaleInvoiceResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnSaleInvoiceResult = null)
    {
        $this
            ->setSearchReturnSaleInvoiceResult($searchReturnSaleInvoiceResult);
    }
    /**
     * Get SearchReturnSaleInvoiceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getSearchReturnSaleInvoiceResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->SearchReturnSaleInvoiceResult ?? null;
    }
    /**
     * Set SearchReturnSaleInvoiceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnSaleInvoiceResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnSaleInvoiceResponse
     */
    public function setSearchReturnSaleInvoiceResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $searchReturnSaleInvoiceResult = null): self
    {
        if (is_null($searchReturnSaleInvoiceResult) || (is_array($searchReturnSaleInvoiceResult) && empty($searchReturnSaleInvoiceResult))) {
            unset($this->SearchReturnSaleInvoiceResult);
        } else {
            $this->SearchReturnSaleInvoiceResult = $searchReturnSaleInvoiceResult;
        }
        
        return $this;
    }
}
