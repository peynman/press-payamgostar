<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductGroupResponse StructType
 * @subpackage Structs
 */
class SaveProductGroupResponse extends AbstractStructBase
{
    /**
     * The SaveProductGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult $SaveProductGroupResult = null;
    /**
     * Constructor method for SaveProductGroupResponse
     * @uses SaveProductGroupResponse::setSaveProductGroupResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult $saveProductGroupResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult $saveProductGroupResult = null)
    {
        $this
            ->setSaveProductGroupResult($saveProductGroupResult);
    }
    /**
     * Get SaveProductGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult|null
     */
    public function getSaveProductGroupResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult
    {
        return $this->SaveProductGroupResult ?? null;
    }
    /**
     * Set SaveProductGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult $saveProductGroupResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResponse
     */
    public function setSaveProductGroupResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult $saveProductGroupResult = null): self
    {
        if (is_null($saveProductGroupResult) || (is_array($saveProductGroupResult) && empty($saveProductGroupResult))) {
            unset($this->SaveProductGroupResult);
        } else {
            $this->SaveProductGroupResult = $saveProductGroupResult;
        }
        
        return $this;
    }
}
