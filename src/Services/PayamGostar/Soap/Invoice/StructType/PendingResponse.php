<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingResponse StructType
 * @subpackage Structs
 */
class PendingResponse extends AbstractStructBase
{
    /**
     * The PendingResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $PendingResult = null;
    /**
     * Constructor method for PendingResponse
     * @uses PendingResponse::setPendingResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $pendingResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $pendingResult = null)
    {
        $this
            ->setPendingResult($pendingResult);
    }
    /**
     * Get PendingResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getPendingResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->PendingResult ?? null;
    }
    /**
     * Set PendingResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $pendingResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\PendingResponse
     */
    public function setPendingResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $pendingResult = null): self
    {
        if (is_null($pendingResult) || (is_array($pendingResult) && empty($pendingResult))) {
            unset($this->PendingResult);
        } else {
            $this->PendingResult = $pendingResult;
        }
        
        return $this;
    }
}
