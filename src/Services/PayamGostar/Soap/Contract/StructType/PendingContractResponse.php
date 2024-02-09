<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingContractResponse StructType
 * @subpackage Structs
 */
class PendingContractResponse extends AbstractStructBase
{
    /**
     * The PendingContractResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $PendingContractResult = null;
    /**
     * Constructor method for PendingContractResponse
     * @uses PendingContractResponse::setPendingContractResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $pendingContractResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $pendingContractResult = null)
    {
        $this
            ->setPendingContractResult($pendingContractResult);
    }
    /**
     * Get PendingContractResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    public function getPendingContractResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult
    {
        return $this->PendingContractResult ?? null;
    }
    /**
     * Set PendingContractResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $pendingContractResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\PendingContractResponse
     */
    public function setPendingContractResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $pendingContractResult = null): self
    {
        if (is_null($pendingContractResult) || (is_array($pendingContractResult) && empty($pendingContractResult))) {
            unset($this->PendingContractResult);
        } else {
            $this->PendingContractResult = $pendingContractResult;
        }
        
        return $this;
    }
}
