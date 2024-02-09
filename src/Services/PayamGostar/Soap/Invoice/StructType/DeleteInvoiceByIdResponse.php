<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteInvoiceByIdResponse StructType
 * @subpackage Structs
 */
class DeleteInvoiceByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteInvoiceByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $DeleteInvoiceByIdResult = null;
    /**
     * Constructor method for DeleteInvoiceByIdResponse
     * @uses DeleteInvoiceByIdResponse::setDeleteInvoiceByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $deleteInvoiceByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $deleteInvoiceByIdResult = null)
    {
        $this
            ->setDeleteInvoiceByIdResult($deleteInvoiceByIdResult);
    }
    /**
     * Get DeleteInvoiceByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteInvoiceByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->DeleteInvoiceByIdResult ?? null;
    }
    /**
     * Set DeleteInvoiceByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $deleteInvoiceByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\DeleteInvoiceByIdResponse
     */
    public function setDeleteInvoiceByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $deleteInvoiceByIdResult = null): self
    {
        if (is_null($deleteInvoiceByIdResult) || (is_array($deleteInvoiceByIdResult) && empty($deleteInvoiceByIdResult))) {
            unset($this->DeleteInvoiceByIdResult);
        } else {
            $this->DeleteInvoiceByIdResult = $deleteInvoiceByIdResult;
        }
        
        return $this;
    }
}
