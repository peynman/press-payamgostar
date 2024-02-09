<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductResponse StructType
 * @subpackage Structs
 */
class SaveProductResponse extends AbstractStructBase
{
    /**
     * The SaveProductResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult $SaveProductResult = null;
    /**
     * Constructor method for SaveProductResponse
     * @uses SaveProductResponse::setSaveProductResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult $saveProductResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult $saveProductResult = null)
    {
        $this
            ->setSaveProductResult($saveProductResult);
    }
    /**
     * Get SaveProductResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult|null
     */
    public function getSaveProductResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult
    {
        return $this->SaveProductResult ?? null;
    }
    /**
     * Set SaveProductResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult $saveProductResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductResponse
     */
    public function setSaveProductResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveCrmObjectResult $saveProductResult = null): self
    {
        if (is_null($saveProductResult) || (is_array($saveProductResult) && empty($saveProductResult))) {
            unset($this->SaveProductResult);
        } else {
            $this->SaveProductResult = $saveProductResult;
        }
        
        return $this;
    }
}
