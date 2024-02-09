<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RejectedContractResponse StructType
 * @subpackage Structs
 */
class RejectedContractResponse extends AbstractStructBase
{
    /**
     * The RejectedContractResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $RejectedContractResult = null;
    /**
     * Constructor method for RejectedContractResponse
     * @uses RejectedContractResponse::setRejectedContractResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $rejectedContractResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $rejectedContractResult = null)
    {
        $this
            ->setRejectedContractResult($rejectedContractResult);
    }
    /**
     * Get RejectedContractResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    public function getRejectedContractResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult
    {
        return $this->RejectedContractResult ?? null;
    }
    /**
     * Set RejectedContractResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $rejectedContractResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\RejectedContractResponse
     */
    public function setRejectedContractResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $rejectedContractResult = null): self
    {
        if (is_null($rejectedContractResult) || (is_array($rejectedContractResult) && empty($rejectedContractResult))) {
            unset($this->RejectedContractResult);
        } else {
            $this->RejectedContractResult = $rejectedContractResult;
        }
        
        return $this;
    }
}
