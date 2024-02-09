<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberedPaymentResponse StructType
 * @subpackage Structs
 */
class NumberedPaymentResponse extends AbstractStructBase
{
    /**
     * The NumberedPaymentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $NumberedPaymentResult = null;
    /**
     * Constructor method for NumberedPaymentResponse
     * @uses NumberedPaymentResponse::setNumberedPaymentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $numberedPaymentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $numberedPaymentResult = null)
    {
        $this
            ->setNumberedPaymentResult($numberedPaymentResult);
    }
    /**
     * Get NumberedPaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getNumberedPaymentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->NumberedPaymentResult ?? null;
    }
    /**
     * Set NumberedPaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $numberedPaymentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\NumberedPaymentResponse
     */
    public function setNumberedPaymentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $numberedPaymentResult = null): self
    {
        if (is_null($numberedPaymentResult) || (is_array($numberedPaymentResult) && empty($numberedPaymentResult))) {
            unset($this->NumberedPaymentResult);
        } else {
            $this->NumberedPaymentResult = $numberedPaymentResult;
        }
        
        return $this;
    }
}
