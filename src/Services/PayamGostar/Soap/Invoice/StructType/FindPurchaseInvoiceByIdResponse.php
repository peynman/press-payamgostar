<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPurchaseInvoiceByIdResponse StructType
 * @subpackage Structs
 */
class FindPurchaseInvoiceByIdResponse extends AbstractStructBase
{
    /**
     * The FindPurchaseInvoiceByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindPurchaseInvoiceByIdResult = null;
    /**
     * Constructor method for FindPurchaseInvoiceByIdResponse
     * @uses FindPurchaseInvoiceByIdResponse::setFindPurchaseInvoiceByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseInvoiceByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseInvoiceByIdResult = null)
    {
        $this
            ->setFindPurchaseInvoiceByIdResult($findPurchaseInvoiceByIdResult);
    }
    /**
     * Get FindPurchaseInvoiceByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindPurchaseInvoiceByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindPurchaseInvoiceByIdResult ?? null;
    }
    /**
     * Set FindPurchaseInvoiceByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseInvoiceByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindPurchaseInvoiceByIdResponse
     */
    public function setFindPurchaseInvoiceByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findPurchaseInvoiceByIdResult = null): self
    {
        if (is_null($findPurchaseInvoiceByIdResult) || (is_array($findPurchaseInvoiceByIdResult) && empty($findPurchaseInvoiceByIdResult))) {
            unset($this->FindPurchaseInvoiceByIdResult);
        } else {
            $this->FindPurchaseInvoiceByIdResult = $findPurchaseInvoiceByIdResult;
        }
        
        return $this;
    }
}
