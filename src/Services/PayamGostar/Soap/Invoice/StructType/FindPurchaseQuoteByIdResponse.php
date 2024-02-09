<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPurchaseQuoteByIdResponse StructType
 * @subpackage Structs
 */
class FindPurchaseQuoteByIdResponse extends AbstractStructBase
{
    /**
     * The FindPurchaseQuoteByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindPurchaseQuoteByIdResult = null;
    /**
     * Constructor method for FindPurchaseQuoteByIdResponse
     * @uses FindPurchaseQuoteByIdResponse::setFindPurchaseQuoteByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseQuoteByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseQuoteByIdResult = null)
    {
        $this
            ->setFindPurchaseQuoteByIdResult($findPurchaseQuoteByIdResult);
    }
    /**
     * Get FindPurchaseQuoteByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindPurchaseQuoteByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindPurchaseQuoteByIdResult ?? null;
    }
    /**
     * Set FindPurchaseQuoteByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseQuoteByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseQuoteByIdResponse
     */
    public function setFindPurchaseQuoteByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseQuoteByIdResult = null): self
    {
        if (is_null($findPurchaseQuoteByIdResult) || (is_array($findPurchaseQuoteByIdResult) && empty($findPurchaseQuoteByIdResult))) {
            unset($this->FindPurchaseQuoteByIdResult);
        } else {
            $this->FindPurchaseQuoteByIdResult = $findPurchaseQuoteByIdResult;
        }
        
        return $this;
    }
}
