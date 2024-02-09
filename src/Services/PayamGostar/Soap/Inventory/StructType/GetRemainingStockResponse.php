<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemainingStockResponse StructType
 * @subpackage Structs
 */
class GetRemainingStockResponse extends AbstractStructBase
{
    /**
     * The GetRemainingStockResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult $GetRemainingStockResult = null;
    /**
     * Constructor method for GetRemainingStockResponse
     * @uses GetRemainingStockResponse::setGetRemainingStockResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult $getRemainingStockResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult $getRemainingStockResult = null)
    {
        $this
            ->setGetRemainingStockResult($getRemainingStockResult);
    }
    /**
     * Get GetRemainingStockResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult|null
     */
    public function getGetRemainingStockResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult
    {
        return $this->GetRemainingStockResult ?? null;
    }
    /**
     * Set GetRemainingStockResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult $getRemainingStockResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\GetRemainingStockResponse
     */
    public function setGetRemainingStockResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult $getRemainingStockResult = null): self
    {
        if (is_null($getRemainingStockResult) || (is_array($getRemainingStockResult) && empty($getRemainingStockResult))) {
            unset($this->GetRemainingStockResult);
        } else {
            $this->GetRemainingStockResult = $getRemainingStockResult;
        }
        
        return $this;
    }
}
