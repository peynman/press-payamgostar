<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveReturnInvoiceResponse StructType
 * @subpackage Structs
 */
class SaveReturnInvoiceResponse extends AbstractStructBase
{
    /**
     * The SaveReturnInvoiceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $SaveReturnInvoiceResult = null;
    /**
     * Constructor method for SaveReturnInvoiceResponse
     * @uses SaveReturnInvoiceResponse::setSaveReturnInvoiceResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveReturnInvoiceResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveReturnInvoiceResult = null)
    {
        $this
            ->setSaveReturnInvoiceResult($saveReturnInvoiceResult);
    }
    /**
     * Get SaveReturnInvoiceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getSaveReturnInvoiceResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->SaveReturnInvoiceResult ?? null;
    }
    /**
     * Set SaveReturnInvoiceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveReturnInvoiceResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoiceResponse
     */
    public function setSaveReturnInvoiceResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $saveReturnInvoiceResult = null): self
    {
        if (is_null($saveReturnInvoiceResult) || (is_array($saveReturnInvoiceResult) && empty($saveReturnInvoiceResult))) {
            unset($this->SaveReturnInvoiceResult);
        } else {
            $this->SaveReturnInvoiceResult = $saveReturnInvoiceResult;
        }
        
        return $this;
    }
}
