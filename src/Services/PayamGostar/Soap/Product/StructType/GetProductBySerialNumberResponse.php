<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductBySerialNumberResponse StructType
 * @subpackage Structs
 */
class GetProductBySerialNumberResponse extends AbstractStructBase
{
    /**
     * The GetProductBySerialNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $GetProductBySerialNumberResult = null;
    /**
     * Constructor method for GetProductBySerialNumberResponse
     * @uses GetProductBySerialNumberResponse::setGetProductBySerialNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $getProductBySerialNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $getProductBySerialNumberResult = null)
    {
        $this
            ->setGetProductBySerialNumberResult($getProductBySerialNumberResult);
    }
    /**
     * Get GetProductBySerialNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    public function getGetProductBySerialNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
    {
        return $this->GetProductBySerialNumberResult ?? null;
    }
    /**
     * Set GetProductBySerialNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $getProductBySerialNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\GetProductBySerialNumberResponse
     */
    public function setGetProductBySerialNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $getProductBySerialNumberResult = null): self
    {
        if (is_null($getProductBySerialNumberResult) || (is_array($getProductBySerialNumberResult) && empty($getProductBySerialNumberResult))) {
            unset($this->GetProductBySerialNumberResult);
        } else {
            $this->GetProductBySerialNumberResult = $getProductBySerialNumberResult;
        }
        
        return $this;
    }
}
