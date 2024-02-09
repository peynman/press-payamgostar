<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveInvoiceResponse StructType
 * @subpackage Structs
 */
class SaveInvoiceResponse extends AbstractStructBase
{
    /**
     * The SaveInvoiceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $SaveInvoiceResult = null;
    /**
     * Constructor method for SaveInvoiceResponse
     * @uses SaveInvoiceResponse::setSaveInvoiceResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveInvoiceResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveInvoiceResult = null)
    {
        $this
            ->setSaveInvoiceResult($saveInvoiceResult);
    }
    /**
     * Get SaveInvoiceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getSaveInvoiceResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->SaveInvoiceResult ?? null;
    }
    /**
     * Set SaveInvoiceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveInvoiceResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveInvoiceResponse
     */
    public function setSaveInvoiceResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveInvoiceResult = null): self
    {
        if (is_null($saveInvoiceResult) || (is_array($saveInvoiceResult) && empty($saveInvoiceResult))) {
            unset($this->SaveInvoiceResult);
        } else {
            $this->SaveInvoiceResult = $saveInvoiceResult;
        }
        
        return $this;
    }
}
