<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductInfoResult
 * @subpackage Structs
 */
class ProductInfoResult extends OperationResult
{
    /**
     * The ProductInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo $ProductInfoList = null;
    /**
     * Constructor method for ProductInfoResult
     * @uses ProductInfoResult::setProductInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo $productInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo $productInfoList = null)
    {
        $this
            ->setProductInfoList($productInfoList);
    }
    /**
     * Get ProductInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo|null
     */
    public function getProductInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo
    {
        return $this->ProductInfoList ?? null;
    }
    /**
     * Set ProductInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo $productInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
     */
    public function setProductInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductInfo $productInfoList = null): self
    {
        if (is_null($productInfoList) || (is_array($productInfoList) && empty($productInfoList))) {
            unset($this->ProductInfoList);
        } else {
            $this->ProductInfoList = $productInfoList;
        }
        
        return $this;
    }
}
