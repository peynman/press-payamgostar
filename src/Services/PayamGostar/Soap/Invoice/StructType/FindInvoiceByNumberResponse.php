<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindInvoiceByNumberResponse StructType
 * @subpackage Structs
 */
class FindInvoiceByNumberResponse extends AbstractStructBase
{
    /**
     * The FindInvoiceByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindInvoiceByNumberResult = null;
    /**
     * Constructor method for FindInvoiceByNumberResponse
     * @uses FindInvoiceByNumberResponse::setFindInvoiceByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByNumberResult = null)
    {
        $this
            ->setFindInvoiceByNumberResult($findInvoiceByNumberResult);
    }
    /**
     * Get FindInvoiceByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindInvoiceByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindInvoiceByNumberResult ?? null;
    }
    /**
     * Set FindInvoiceByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindInvoiceByNumberResponse
     */
    public function setFindInvoiceByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findInvoiceByNumberResult = null): self
    {
        if (is_null($findInvoiceByNumberResult) || (is_array($findInvoiceByNumberResult) && empty($findInvoiceByNumberResult))) {
            unset($this->FindInvoiceByNumberResult);
        } else {
            $this->FindInvoiceByNumberResult = $findInvoiceByNumberResult;
        }
        
        return $this;
    }
}
