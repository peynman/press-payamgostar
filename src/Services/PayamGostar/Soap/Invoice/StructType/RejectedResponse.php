<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RejectedResponse StructType
 * @subpackage Structs
 */
class RejectedResponse extends AbstractStructBase
{
    /**
     * The RejectedResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $RejectedResult = null;
    /**
     * Constructor method for RejectedResponse
     * @uses RejectedResponse::setRejectedResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $rejectedResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $rejectedResult = null)
    {
        $this
            ->setRejectedResult($rejectedResult);
    }
    /**
     * Get RejectedResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getRejectedResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->RejectedResult ?? null;
    }
    /**
     * Set RejectedResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $rejectedResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RejectedResponse
     */
    public function setRejectedResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $rejectedResult = null): self
    {
        if (is_null($rejectedResult) || (is_array($rejectedResult) && empty($rejectedResult))) {
            unset($this->RejectedResult);
        } else {
            $this->RejectedResult = $rejectedResult;
        }
        
        return $this;
    }
}
