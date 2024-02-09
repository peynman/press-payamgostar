<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductByCodeResponse StructType
 * @subpackage Structs
 */
class FindProductByCodeResponse extends AbstractStructBase
{
    /**
     * The FindProductByCodeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $FindProductByCodeResult = null;
    /**
     * Constructor method for FindProductByCodeResponse
     * @uses FindProductByCodeResponse::setFindProductByCodeResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByCodeResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByCodeResult = null)
    {
        $this
            ->setFindProductByCodeResult($findProductByCodeResult);
    }
    /**
     * Get FindProductByCodeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult|null
     */
    public function getFindProductByCodeResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult
    {
        return $this->FindProductByCodeResult ?? null;
    }
    /**
     * Set FindProductByCodeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByCodeResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductByCodeResponse
     */
    public function setFindProductByCodeResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfoResult $findProductByCodeResult = null): self
    {
        if (is_null($findProductByCodeResult) || (is_array($findProductByCodeResult) && empty($findProductByCodeResult))) {
            unset($this->FindProductByCodeResult);
        } else {
            $this->FindProductByCodeResult = $findProductByCodeResult;
        }
        
        return $this;
    }
}
