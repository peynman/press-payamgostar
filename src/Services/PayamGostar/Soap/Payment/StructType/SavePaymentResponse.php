<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaymentResponse StructType
 * @subpackage Structs
 */
class SavePaymentResponse extends AbstractStructBase
{
    /**
     * The SavePaymentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $SavePaymentResult = null;
    /**
     * Constructor method for SavePaymentResponse
     * @uses SavePaymentResponse::setSavePaymentResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $savePaymentResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $savePaymentResult = null)
    {
        $this
            ->setSavePaymentResult($savePaymentResult);
    }
    /**
     * Get SavePaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getSavePaymentResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->SavePaymentResult ?? null;
    }
    /**
     * Set SavePaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $savePaymentResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePaymentResponse
     */
    public function setSavePaymentResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $savePaymentResult = null): self
    {
        if (is_null($savePaymentResult) || (is_array($savePaymentResult) && empty($savePaymentResult))) {
            unset($this->SavePaymentResult);
        } else {
            $this->SavePaymentResult = $savePaymentResult;
        }
        
        return $this;
    }
}
