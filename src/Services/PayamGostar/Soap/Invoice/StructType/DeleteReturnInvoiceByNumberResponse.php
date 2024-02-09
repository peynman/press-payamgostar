<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteReturnInvoiceByNumberResponse StructType
 * @subpackage Structs
 */
class DeleteReturnInvoiceByNumberResponse extends AbstractStructBase
{
    /**
     * The DeleteReturnInvoiceByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $DeleteReturnInvoiceByNumberResult = null;
    /**
     * Constructor method for DeleteReturnInvoiceByNumberResponse
     * @uses DeleteReturnInvoiceByNumberResponse::setDeleteReturnInvoiceByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteReturnInvoiceByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteReturnInvoiceByNumberResult = null)
    {
        $this
            ->setDeleteReturnInvoiceByNumberResult($deleteReturnInvoiceByNumberResult);
    }
    /**
     * Get DeleteReturnInvoiceByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getDeleteReturnInvoiceByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->DeleteReturnInvoiceByNumberResult ?? null;
    }
    /**
     * Set DeleteReturnInvoiceByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteReturnInvoiceByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteReturnInvoiceByNumberResponse
     */
    public function setDeleteReturnInvoiceByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $deleteReturnInvoiceByNumberResult = null): self
    {
        if (is_null($deleteReturnInvoiceByNumberResult) || (is_array($deleteReturnInvoiceByNumberResult) && empty($deleteReturnInvoiceByNumberResult))) {
            unset($this->DeleteReturnInvoiceByNumberResult);
        } else {
            $this->DeleteReturnInvoiceByNumberResult = $deleteReturnInvoiceByNumberResult;
        }
        
        return $this;
    }
}
