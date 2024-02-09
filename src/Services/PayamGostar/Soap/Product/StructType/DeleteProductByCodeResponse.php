<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductByCodeResponse StructType
 * @subpackage Structs
 */
class DeleteProductByCodeResponse extends AbstractStructBase
{
    /**
     * The DeleteProductByCodeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $DeleteProductByCodeResult = null;
    /**
     * Constructor method for DeleteProductByCodeResponse
     * @uses DeleteProductByCodeResponse::setDeleteProductByCodeResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByCodeResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByCodeResult = null)
    {
        $this
            ->setDeleteProductByCodeResult($deleteProductByCodeResult);
    }
    /**
     * Get DeleteProductByCodeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    public function getDeleteProductByCodeResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
    {
        return $this->DeleteProductByCodeResult ?? null;
    }
    /**
     * Set DeleteProductByCodeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByCodeResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\DeleteProductByCodeResponse
     */
    public function setDeleteProductByCodeResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $deleteProductByCodeResult = null): self
    {
        if (is_null($deleteProductByCodeResult) || (is_array($deleteProductByCodeResult) && empty($deleteProductByCodeResult))) {
            unset($this->DeleteProductByCodeResult);
        } else {
            $this->DeleteProductByCodeResult = $deleteProductByCodeResult;
        }
        
        return $this;
    }
}
