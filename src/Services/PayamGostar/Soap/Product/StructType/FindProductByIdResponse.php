<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductByIdResponse StructType
 * @subpackage Structs
 */
class FindProductByIdResponse extends AbstractStructBase
{
    /**
     * The FindProductByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $FindProductByIdResult = null;
    /**
     * Constructor method for FindProductByIdResponse
     * @uses FindProductByIdResponse::setFindProductByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByIdResult = null)
    {
        $this
            ->setFindProductByIdResult($findProductByIdResult);
    }
    /**
     * Get FindProductByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    public function getFindProductByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
    {
        return $this->FindProductByIdResult ?? null;
    }
    /**
     * Set FindProductByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByIdResponse
     */
    public function setFindProductByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByIdResult = null): self
    {
        if (is_null($findProductByIdResult) || (is_array($findProductByIdResult) && empty($findProductByIdResult))) {
            unset($this->FindProductByIdResult);
        } else {
            $this->FindProductByIdResult = $findProductByIdResult;
        }
        
        return $this;
    }
}
