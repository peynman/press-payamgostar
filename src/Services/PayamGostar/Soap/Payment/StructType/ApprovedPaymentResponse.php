<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApprovedPaymentResponse StructType
 * @subpackage Structs
 */
class ApprovedPaymentResponse extends AbstractStructBase
{
    /**
     * The ApprovedPaymentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $ApprovedPaymentResult = null;
    /**
     * Constructor method for ApprovedPaymentResponse
     * @uses ApprovedPaymentResponse::setApprovedPaymentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $approvedPaymentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $approvedPaymentResult = null)
    {
        $this
            ->setApprovedPaymentResult($approvedPaymentResult);
    }
    /**
     * Get ApprovedPaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getApprovedPaymentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->ApprovedPaymentResult ?? null;
    }
    /**
     * Set ApprovedPaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $approvedPaymentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\ApprovedPaymentResponse
     */
    public function setApprovedPaymentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $approvedPaymentResult = null): self
    {
        if (is_null($approvedPaymentResult) || (is_array($approvedPaymentResult) && empty($approvedPaymentResult))) {
            unset($this->ApprovedPaymentResult);
        } else {
            $this->ApprovedPaymentResult = $approvedPaymentResult;
        }
        
        return $this;
    }
}
