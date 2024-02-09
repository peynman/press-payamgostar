<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingPaymentResponse StructType
 * @subpackage Structs
 */
class PendingPaymentResponse extends AbstractStructBase
{
    /**
     * The PendingPaymentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $PendingPaymentResult = null;
    /**
     * Constructor method for PendingPaymentResponse
     * @uses PendingPaymentResponse::setPendingPaymentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $pendingPaymentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $pendingPaymentResult = null)
    {
        $this
            ->setPendingPaymentResult($pendingPaymentResult);
    }
    /**
     * Get PendingPaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getPendingPaymentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->PendingPaymentResult ?? null;
    }
    /**
     * Set PendingPaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $pendingPaymentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PendingPaymentResponse
     */
    public function setPendingPaymentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $pendingPaymentResult = null): self
    {
        if (is_null($pendingPaymentResult) || (is_array($pendingPaymentResult) && empty($pendingPaymentResult))) {
            unset($this->PendingPaymentResult);
        } else {
            $this->PendingPaymentResult = $pendingPaymentResult;
        }
        
        return $this;
    }
}
