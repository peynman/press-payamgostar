<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductByIdResponse StructType
 * @subpackage Structs
 */
class DeleteProductByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteProductByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $DeleteProductByIdResult = null;
    /**
     * Constructor method for DeleteProductByIdResponse
     * @uses DeleteProductByIdResponse::setDeleteProductByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByIdResult = null)
    {
        $this
            ->setDeleteProductByIdResult($deleteProductByIdResult);
    }
    /**
     * Get DeleteProductByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    public function getDeleteProductByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
    {
        return $this->DeleteProductByIdResult ?? null;
    }
    /**
     * Set DeleteProductByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByIdResponse
     */
    public function setDeleteProductByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByIdResult = null): self
    {
        if (is_null($deleteProductByIdResult) || (is_array($deleteProductByIdResult) && empty($deleteProductByIdResult))) {
            unset($this->DeleteProductByIdResult);
        } else {
            $this->DeleteProductByIdResult = $deleteProductByIdResult;
        }
        
        return $this;
    }
}
