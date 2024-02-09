<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindInvoiceByIdResponse StructType
 * @subpackage Structs
 */
class FindInvoiceByIdResponse extends AbstractStructBase
{
    /**
     * The FindInvoiceByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindInvoiceByIdResult = null;
    /**
     * Constructor method for FindInvoiceByIdResponse
     * @uses FindInvoiceByIdResponse::setFindInvoiceByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByIdResult = null)
    {
        $this
            ->setFindInvoiceByIdResult($findInvoiceByIdResult);
    }
    /**
     * Get FindInvoiceByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindInvoiceByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindInvoiceByIdResult ?? null;
    }
    /**
     * Set FindInvoiceByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByIdResponse
     */
    public function setFindInvoiceByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByIdResult = null): self
    {
        if (is_null($findInvoiceByIdResult) || (is_array($findInvoiceByIdResult) && empty($findInvoiceByIdResult))) {
            unset($this->FindInvoiceByIdResult);
        } else {
            $this->FindInvoiceByIdResult = $findInvoiceByIdResult;
        }
        
        return $this;
    }
}
