<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InventoryInfo
 * @subpackage Structs
 */
class InventoryInfo extends AbstractStructBase
{
    /**
     * The InventoryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InventoryId = null;
    /**
     * The InventoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InventoryName = null;
    /**
     * The StockRemain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $StockRemain = null;
    /**
     * Constructor method for InventoryInfo
     * @uses InventoryInfo::setInventoryId()
     * @uses InventoryInfo::setInventoryName()
     * @uses InventoryInfo::setStockRemain()
     * @param string $inventoryId
     * @param string $inventoryName
     * @param float $stockRemain
     */
    public function __construct(?string $inventoryId = null, ?string $inventoryName = null, ?float $stockRemain = null)
    {
        $this
            ->setInventoryId($inventoryId)
            ->setInventoryName($inventoryName)
            ->setStockRemain($stockRemain);
    }
    /**
     * Get InventoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventoryId(): ?string
    {
        return $this->InventoryId ?? null;
    }
    /**
     * Set InventoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventoryId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
     */
    public function setInventoryId(?string $inventoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($inventoryId) && !is_string($inventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryId, true), gettype($inventoryId)), __LINE__);
        }
        if (is_null($inventoryId) || (is_array($inventoryId) && empty($inventoryId))) {
            unset($this->InventoryId);
        } else {
            $this->InventoryId = $inventoryId;
        }
        
        return $this;
    }
    /**
     * Get InventoryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventoryName(): ?string
    {
        return $this->InventoryName ?? null;
    }
    /**
     * Set InventoryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventoryName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
     */
    public function setInventoryName(?string $inventoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($inventoryName) && !is_string($inventoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryName, true), gettype($inventoryName)), __LINE__);
        }
        if (is_null($inventoryName) || (is_array($inventoryName) && empty($inventoryName))) {
            unset($this->InventoryName);
        } else {
            $this->InventoryName = $inventoryName;
        }
        
        return $this;
    }
    /**
     * Get StockRemain value
     * @return float|null
     */
    public function getStockRemain(): ?float
    {
        return $this->StockRemain;
    }
    /**
     * Set StockRemain value
     * @param float $stockRemain
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Inventory\StructType\InventoryInfo
     */
    public function setStockRemain(?float $stockRemain = null): self
    {
        // validation for constraint: float
        if (!is_null($stockRemain) && !(is_float($stockRemain) || is_numeric($stockRemain))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($stockRemain, true), gettype($stockRemain)), __LINE__);
        }
        $this->StockRemain = $stockRemain;
        
        return $this;
    }
}
