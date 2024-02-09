<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReturnInvoiceByIdResponse StructType
 * @subpackage Structs
 */
class FindReturnInvoiceByIdResponse extends AbstractStructBase
{
    /**
     * The FindReturnInvoiceByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindReturnInvoiceByIdResult = null;
    /**
     * Constructor method for FindReturnInvoiceByIdResponse
     * @uses FindReturnInvoiceByIdResponse::setFindReturnInvoiceByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByIdResult = null)
    {
        $this
            ->setFindReturnInvoiceByIdResult($findReturnInvoiceByIdResult);
    }
    /**
     * Get FindReturnInvoiceByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindReturnInvoiceByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindReturnInvoiceByIdResult ?? null;
    }
    /**
     * Set FindReturnInvoiceByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByIdResponse
     */
    public function setFindReturnInvoiceByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByIdResult = null): self
    {
        if (is_null($findReturnInvoiceByIdResult) || (is_array($findReturnInvoiceByIdResult) && empty($findReturnInvoiceByIdResult))) {
            unset($this->FindReturnInvoiceByIdResult);
        } else {
            $this->FindReturnInvoiceByIdResult = $findReturnInvoiceByIdResult;
        }
        
        return $this;
    }
}
