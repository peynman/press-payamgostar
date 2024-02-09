<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReturnInvoiceByNumberResponse StructType
 * @subpackage Structs
 */
class FindReturnInvoiceByNumberResponse extends AbstractStructBase
{
    /**
     * The FindReturnInvoiceByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindReturnInvoiceByNumberResult = null;
    /**
     * Constructor method for FindReturnInvoiceByNumberResponse
     * @uses FindReturnInvoiceByNumberResponse::setFindReturnInvoiceByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByNumberResult = null)
    {
        $this
            ->setFindReturnInvoiceByNumberResult($findReturnInvoiceByNumberResult);
    }
    /**
     * Get FindReturnInvoiceByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindReturnInvoiceByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindReturnInvoiceByNumberResult ?? null;
    }
    /**
     * Set FindReturnInvoiceByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnInvoiceByNumberResponse
     */
    public function setFindReturnInvoiceByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findReturnInvoiceByNumberResult = null): self
    {
        if (is_null($findReturnInvoiceByNumberResult) || (is_array($findReturnInvoiceByNumberResult) && empty($findReturnInvoiceByNumberResult))) {
            unset($this->FindReturnInvoiceByNumberResult);
        } else {
            $this->FindReturnInvoiceByNumberResult = $findReturnInvoiceByNumberResult;
        }
        
        return $this;
    }
}
