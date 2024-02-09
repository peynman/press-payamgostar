<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteReceiptByNumberResponse StructType
 * @subpackage Structs
 */
class DeleteReceiptByNumberResponse extends AbstractStructBase
{
    /**
     * The DeleteReceiptByNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $DeleteReceiptByNumberResult = null;
    /**
     * Constructor method for DeleteReceiptByNumberResponse
     * @uses DeleteReceiptByNumberResponse::setDeleteReceiptByNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deleteReceiptByNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deleteReceiptByNumberResult = null)
    {
        $this
            ->setDeleteReceiptByNumberResult($deleteReceiptByNumberResult);
    }
    /**
     * Get DeleteReceiptByNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteReceiptByNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult
    {
        return $this->DeleteReceiptByNumberResult ?? null;
    }
    /**
     * Set DeleteReceiptByNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deleteReceiptByNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\DeleteReceiptByNumberResponse
     */
    public function setDeleteReceiptByNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SaveCrmObjectResult $deleteReceiptByNumberResult = null): self
    {
        if (is_null($deleteReceiptByNumberResult) || (is_array($deleteReceiptByNumberResult) && empty($deleteReceiptByNumberResult))) {
            unset($this->DeleteReceiptByNumberResult);
        } else {
            $this->DeleteReceiptByNumberResult = $deleteReceiptByNumberResult;
        }
        
        return $this;
    }
}
