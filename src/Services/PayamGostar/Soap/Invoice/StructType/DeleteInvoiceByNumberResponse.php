<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteInvoiceByNumberResponse StructType
 * @subpackage Structs
 */
class DeleteInvoiceByNumberResponse extends AbstractStructBase
{
    /**
     * The DeleteInvoiceByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $DeleteInvoiceByNumberResult = null;
    /**
     * Constructor method for DeleteInvoiceByNumberResponse
     * @uses DeleteInvoiceByNumberResponse::setDeleteInvoiceByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteInvoiceByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteInvoiceByNumberResult = null)
    {
        $this
            ->setDeleteInvoiceByNumberResult($deleteInvoiceByNumberResult);
    }
    /**
     * Get DeleteInvoiceByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getDeleteInvoiceByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->DeleteInvoiceByNumberResult ?? null;
    }
    /**
     * Set DeleteInvoiceByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteInvoiceByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByNumberResponse
     */
    public function setDeleteInvoiceByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteInvoiceByNumberResult = null): self
    {
        if (is_null($deleteInvoiceByNumberResult) || (is_array($deleteInvoiceByNumberResult) && empty($deleteInvoiceByNumberResult))) {
            unset($this->DeleteInvoiceByNumberResult);
        } else {
            $this->DeleteInvoiceByNumberResult = $deleteInvoiceByNumberResult;
        }
        
        return $this;
    }
}
