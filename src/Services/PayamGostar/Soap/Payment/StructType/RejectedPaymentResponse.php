<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RejectedPaymentResponse StructType
 * @subpackage Structs
 */
class RejectedPaymentResponse extends AbstractStructBase
{
    /**
     * The RejectedPaymentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $RejectedPaymentResult = null;
    /**
     * Constructor method for RejectedPaymentResponse
     * @uses RejectedPaymentResponse::setRejectedPaymentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $rejectedPaymentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $rejectedPaymentResult = null)
    {
        $this
            ->setRejectedPaymentResult($rejectedPaymentResult);
    }
    /**
     * Get RejectedPaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getRejectedPaymentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->RejectedPaymentResult ?? null;
    }
    /**
     * Set RejectedPaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $rejectedPaymentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RejectedPaymentResponse
     */
    public function setRejectedPaymentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $rejectedPaymentResult = null): self
    {
        if (is_null($rejectedPaymentResult) || (is_array($rejectedPaymentResult) && empty($rejectedPaymentResult))) {
            unset($this->RejectedPaymentResult);
        } else {
            $this->RejectedPaymentResult = $rejectedPaymentResult;
        }
        
        return $this;
    }
}
