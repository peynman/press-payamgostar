<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReceiptByIdResponse StructType
 * @subpackage Structs
 */
class FindReceiptByIdResponse extends AbstractStructBase
{
    /**
     * The FindReceiptByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $FindReceiptByIdResult = null;
    /**
     * Constructor method for FindReceiptByIdResponse
     * @uses FindReceiptByIdResponse::setFindReceiptByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByIdResult = null)
    {
        $this
            ->setFindReceiptByIdResult($findReceiptByIdResult);
    }
    /**
     * Get FindReceiptByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult|null
     */
    public function getFindReceiptByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult
    {
        return $this->FindReceiptByIdResult ?? null;
    }
    /**
     * Set FindReceiptByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\FindReceiptByIdResponse
     */
    public function setFindReceiptByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfoResult $findReceiptByIdResult = null): self
    {
        if (is_null($findReceiptByIdResult) || (is_array($findReceiptByIdResult) && empty($findReceiptByIdResult))) {
            unset($this->FindReceiptByIdResult);
        } else {
            $this->FindReceiptByIdResult = $findReceiptByIdResult;
        }
        
        return $this;
    }
}
