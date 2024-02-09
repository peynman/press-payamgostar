<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductByNameResponse StructType
 * @subpackage Structs
 */
class FindProductByNameResponse extends AbstractStructBase
{
    /**
     * The FindProductByNameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $FindProductByNameResult = null;
    /**
     * Constructor method for FindProductByNameResponse
     * @uses FindProductByNameResponse::setFindProductByNameResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByNameResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByNameResult = null)
    {
        $this
            ->setFindProductByNameResult($findProductByNameResult);
    }
    /**
     * Get FindProductByNameResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    public function getFindProductByNameResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
    {
        return $this->FindProductByNameResult ?? null;
    }
    /**
     * Set FindProductByNameResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByNameResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByNameResponse
     */
    public function setFindProductByNameResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByNameResult = null): self
    {
        if (is_null($findProductByNameResult) || (is_array($findProductByNameResult) && empty($findProductByNameResult))) {
            unset($this->FindProductByNameResult);
        } else {
            $this->FindProductByNameResult = $findProductByNameResult;
        }
        
        return $this;
    }
}
