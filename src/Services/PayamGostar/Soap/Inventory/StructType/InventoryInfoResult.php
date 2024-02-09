<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InventoryInfoResult
 * @subpackage Structs
 */
class InventoryInfoResult extends OperationResult
{
    /**
     * The InventoryInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo $InventoryInfoList = null;
    /**
     * Constructor method for InventoryInfoResult
     * @uses InventoryInfoResult::setInventoryInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo $inventoryInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo $inventoryInfoList = null)
    {
        $this
            ->setInventoryInfoList($inventoryInfoList);
    }
    /**
     * Get InventoryInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo|null
     */
    public function getInventoryInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo
    {
        return $this->InventoryInfoList ?? null;
    }
    /**
     * Set InventoryInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo $inventoryInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfoResult
     */
    public function setInventoryInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\ArrayType\ArrayOfInventoryInfo $inventoryInfoList = null): self
    {
        if (is_null($inventoryInfoList) || (is_array($inventoryInfoList) && empty($inventoryInfoList))) {
            unset($this->InventoryInfoList);
        } else {
            $this->InventoryInfoList = $inventoryInfoList;
        }
        
        return $this;
    }
}
