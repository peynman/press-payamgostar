<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductGroupResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductGroupResult
 * @subpackage Structs
 */
class ProductGroupResult extends OperationResult
{
    /**
     * The ProductGroupInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo $ProductGroupInfo = null;
    /**
     * Constructor method for ProductGroupResult
     * @uses ProductGroupResult::setProductGroupInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo $productGroupInfo
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo $productGroupInfo = null)
    {
        $this
            ->setProductGroupInfo($productGroupInfo);
    }
    /**
     * Get ProductGroupInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo|null
     */
    public function getProductGroupInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
    {
        return $this->ProductGroupInfo ?? null;
    }
    /**
     * Set ProductGroupInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo $productGroupInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult
     */
    public function setProductGroupInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo $productGroupInfo = null): self
    {
        if (is_null($productGroupInfo) || (is_array($productGroupInfo) && empty($productGroupInfo))) {
            unset($this->ProductGroupInfo);
        } else {
            $this->ProductGroupInfo = $productGroupInfo;
        }
        
        return $this;
    }
}
