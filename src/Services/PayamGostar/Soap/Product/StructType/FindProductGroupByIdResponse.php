<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductGroupByIdResponse StructType
 * @subpackage Structs
 */
class FindProductGroupByIdResponse extends AbstractStructBase
{
    /**
     * The FindProductGroupByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult $FindProductGroupByIdResult = null;
    /**
     * Constructor method for FindProductGroupByIdResponse
     * @uses FindProductGroupByIdResponse::setFindProductGroupByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult $findProductGroupByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult $findProductGroupByIdResult = null)
    {
        $this
            ->setFindProductGroupByIdResult($findProductGroupByIdResult);
    }
    /**
     * Get FindProductGroupByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult|null
     */
    public function getFindProductGroupByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult
    {
        return $this->FindProductGroupByIdResult ?? null;
    }
    /**
     * Set FindProductGroupByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult $findProductGroupByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductGroupByIdResponse
     */
    public function setFindProductGroupByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupResult $findProductGroupByIdResult = null): self
    {
        if (is_null($findProductGroupByIdResult) || (is_array($findProductGroupByIdResult) && empty($findProductGroupByIdResult))) {
            unset($this->FindProductGroupByIdResult);
        } else {
            $this->FindProductGroupByIdResult = $findProductGroupByIdResult;
        }
        
        return $this;
    }
}
