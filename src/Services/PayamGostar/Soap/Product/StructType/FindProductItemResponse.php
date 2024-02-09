<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductItemResponse StructType
 * @subpackage Structs
 */
class FindProductItemResponse extends AbstractStructBase
{
    /**
     * The FindProductItemResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo $FindProductItemResult = null;
    /**
     * Constructor method for FindProductItemResponse
     * @uses FindProductItemResponse::setFindProductItemResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo $findProductItemResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo $findProductItemResult = null)
    {
        $this
            ->setFindProductItemResult($findProductItemResult);
    }
    /**
     * Get FindProductItemResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo|null
     */
    public function getFindProductItemResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
    {
        return $this->FindProductItemResult ?? null;
    }
    /**
     * Set FindProductItemResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo $findProductItemResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItemResponse
     */
    public function setFindProductItemResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo $findProductItemResult = null): self
    {
        if (is_null($findProductItemResult) || (is_array($findProductItemResult) && empty($findProductItemResult))) {
            unset($this->FindProductItemResult);
        } else {
            $this->FindProductItemResult = $findProductItemResult;
        }
        
        return $this;
    }
}
