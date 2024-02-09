<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePaymentByNumberResponse StructType
 * @subpackage Structs
 */
class DeletePaymentByNumberResponse extends AbstractStructBase
{
    /**
     * The DeletePaymentByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $DeletePaymentByNumberResult = null;
    /**
     * Constructor method for DeletePaymentByNumberResponse
     * @uses DeletePaymentByNumberResponse::setDeletePaymentByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deletePaymentByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deletePaymentByNumberResult = null)
    {
        $this
            ->setDeletePaymentByNumberResult($deletePaymentByNumberResult);
    }
    /**
     * Get DeletePaymentByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getDeletePaymentByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->DeletePaymentByNumberResult ?? null;
    }
    /**
     * Set DeletePaymentByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deletePaymentByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeletePaymentByNumberResponse
     */
    public function setDeletePaymentByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deletePaymentByNumberResult = null): self
    {
        if (is_null($deletePaymentByNumberResult) || (is_array($deletePaymentByNumberResult) && empty($deletePaymentByNumberResult))) {
            unset($this->DeletePaymentByNumberResult);
        } else {
            $this->DeletePaymentByNumberResult = $deletePaymentByNumberResult;
        }
        
        return $this;
    }
}
