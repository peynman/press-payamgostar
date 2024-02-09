<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReceiptByNumberResponse StructType
 * @subpackage Structs
 */
class FindReceiptByNumberResponse extends AbstractStructBase
{
    /**
     * The FindReceiptByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $FindReceiptByNumberResult = null;
    /**
     * Constructor method for FindReceiptByNumberResponse
     * @uses FindReceiptByNumberResponse::setFindReceiptByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByNumberResult = null)
    {
        $this
            ->setFindReceiptByNumberResult($findReceiptByNumberResult);
    }
    /**
     * Get FindReceiptByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    public function getFindReceiptByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
    {
        return $this->FindReceiptByNumberResult ?? null;
    }
    /**
     * Set FindReceiptByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByNumberResponse
     */
    public function setFindReceiptByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByNumberResult = null): self
    {
        if (is_null($findReceiptByNumberResult) || (is_array($findReceiptByNumberResult) && empty($findReceiptByNumberResult))) {
            unset($this->FindReceiptByNumberResult);
        } else {
            $this->FindReceiptByNumberResult = $findReceiptByNumberResult;
        }
        
        return $this;
    }
}
