<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReturnPurchaseInvoiceByIdResponse StructType
 * @subpackage Structs
 */
class FindReturnPurchaseInvoiceByIdResponse extends AbstractStructBase
{
    /**
     * The FindReturnPurchaseInvoiceByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindReturnPurchaseInvoiceByIdResult = null;
    /**
     * Constructor method for FindReturnPurchaseInvoiceByIdResponse
     * @uses FindReturnPurchaseInvoiceByIdResponse::setFindReturnPurchaseInvoiceByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnPurchaseInvoiceByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnPurchaseInvoiceByIdResult = null)
    {
        $this
            ->setFindReturnPurchaseInvoiceByIdResult($findReturnPurchaseInvoiceByIdResult);
    }
    /**
     * Get FindReturnPurchaseInvoiceByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindReturnPurchaseInvoiceByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindReturnPurchaseInvoiceByIdResult ?? null;
    }
    /**
     * Set FindReturnPurchaseInvoiceByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnPurchaseInvoiceByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceByIdResponse
     */
    public function setFindReturnPurchaseInvoiceByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnPurchaseInvoiceByIdResult = null): self
    {
        if (is_null($findReturnPurchaseInvoiceByIdResult) || (is_array($findReturnPurchaseInvoiceByIdResult) && empty($findReturnPurchaseInvoiceByIdResult))) {
            unset($this->FindReturnPurchaseInvoiceByIdResult);
        } else {
            $this->FindReturnPurchaseInvoiceByIdResult = $findReturnPurchaseInvoiceByIdResult;
        }
        
        return $this;
    }
}
