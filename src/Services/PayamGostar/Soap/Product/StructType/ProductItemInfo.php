<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductItemInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductItemInfo
 * @subpackage Structs
 */
class ProductItemInfo extends OperationResult
{
    /**
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExpireDate = null;
    /**
     * The HistoryItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory $HistoryItems = null;
    /**
     * The InputInventoryTransactionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $InputInventoryTransactionId = null;
    /**
     * The InventoryId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
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
     * The OutputInventoryTransactionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OutputInventoryTransactionId = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The ProductItemInventoryStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $ProductItemInventoryStatus = null;
    /**
     * The ProductItemStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $ProductItemStatus = null;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The ProductionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductionDate = null;
    /**
     * The WarrantyDurationMonths
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $WarrantyDurationMonths = null;
    /**
     * The WarrantyEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WarrantyEndDate = null;
    /**
     * The WarrantyStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WarrantyStartDate = null;
    /**
     * The WarrantyStartType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $WarrantyStartType = null;
    /**
     * Constructor method for ProductItemInfo
     * @uses ProductItemInfo::setExpireDate()
     * @uses ProductItemInfo::setHistoryItems()
     * @uses ProductItemInfo::setInputInventoryTransactionId()
     * @uses ProductItemInfo::setInventoryId()
     * @uses ProductItemInfo::setInventoryName()
     * @uses ProductItemInfo::setOutputInventoryTransactionId()
     * @uses ProductItemInfo::setProductId()
     * @uses ProductItemInfo::setProductItemInventoryStatus()
     * @uses ProductItemInfo::setProductItemStatus()
     * @uses ProductItemInfo::setProductName()
     * @uses ProductItemInfo::setProductionDate()
     * @uses ProductItemInfo::setWarrantyDurationMonths()
     * @uses ProductItemInfo::setWarrantyEndDate()
     * @uses ProductItemInfo::setWarrantyStartDate()
     * @uses ProductItemInfo::setWarrantyStartType()
     * @param string $expireDate
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory $historyItems
     * @param string $inputInventoryTransactionId
     * @param string $inventoryId
     * @param string $inventoryName
     * @param string $outputInventoryTransactionId
     * @param string $productId
     * @param array|string $productItemInventoryStatus
     * @param array|string $productItemStatus
     * @param string $productName
     * @param string $productionDate
     * @param int $warrantyDurationMonths
     * @param string $warrantyEndDate
     * @param string $warrantyStartDate
     * @param array|string $warrantyStartType
     */
    public function __construct(?string $expireDate = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory $historyItems = null, ?string $inputInventoryTransactionId = null, ?string $inventoryId = null, ?string $inventoryName = null, ?string $outputInventoryTransactionId = null, ?string $productId = null, $productItemInventoryStatus = null, $productItemStatus = null, ?string $productName = null, ?string $productionDate = null, ?int $warrantyDurationMonths = null, ?string $warrantyEndDate = null, ?string $warrantyStartDate = null, $warrantyStartType = null)
    {
        $this
            ->setExpireDate($expireDate)
            ->setHistoryItems($historyItems)
            ->setInputInventoryTransactionId($inputInventoryTransactionId)
            ->setInventoryId($inventoryId)
            ->setInventoryName($inventoryName)
            ->setOutputInventoryTransactionId($outputInventoryTransactionId)
            ->setProductId($productId)
            ->setProductItemInventoryStatus($productItemInventoryStatus)
            ->setProductItemStatus($productItemStatus)
            ->setProductName($productName)
            ->setProductionDate($productionDate)
            ->setWarrantyDurationMonths($warrantyDurationMonths)
            ->setWarrantyEndDate($warrantyEndDate)
            ->setWarrantyStartDate($warrantyStartDate)
            ->setWarrantyStartType($warrantyStartType);
    }
    /**
     * Get ExpireDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->ExpireDate ?? null;
    }
    /**
     * Set ExpireDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expireDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireDate, true), gettype($expireDate)), __LINE__);
        }
        if (is_null($expireDate) || (is_array($expireDate) && empty($expireDate))) {
            unset($this->ExpireDate);
        } else {
            $this->ExpireDate = $expireDate;
        }
        
        return $this;
    }
    /**
     * Get HistoryItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory|null
     */
    public function getHistoryItems(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory
    {
        return $this->HistoryItems ?? null;
    }
    /**
     * Set HistoryItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory $historyItems
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setHistoryItems(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfProductItemHistory $historyItems = null): self
    {
        if (is_null($historyItems) || (is_array($historyItems) && empty($historyItems))) {
            unset($this->HistoryItems);
        } else {
            $this->HistoryItems = $historyItems;
        }
        
        return $this;
    }
    /**
     * Get InputInventoryTransactionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInputInventoryTransactionId(): ?string
    {
        return $this->InputInventoryTransactionId ?? null;
    }
    /**
     * Set InputInventoryTransactionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inputInventoryTransactionId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setInputInventoryTransactionId(?string $inputInventoryTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($inputInventoryTransactionId) && !is_string($inputInventoryTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inputInventoryTransactionId, true), gettype($inputInventoryTransactionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($inputInventoryTransactionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $inputInventoryTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($inputInventoryTransactionId, true)), __LINE__);
        }
        if (is_null($inputInventoryTransactionId) || (is_array($inputInventoryTransactionId) && empty($inputInventoryTransactionId))) {
            unset($this->InputInventoryTransactionId);
        } else {
            $this->InputInventoryTransactionId = $inputInventoryTransactionId;
        }
        
        return $this;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setInventoryId(?string $inventoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($inventoryId) && !is_string($inventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryId, true), gettype($inventoryId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($inventoryId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $inventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($inventoryId, true)), __LINE__);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
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
     * Get OutputInventoryTransactionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputInventoryTransactionId(): ?string
    {
        return $this->OutputInventoryTransactionId ?? null;
    }
    /**
     * Set OutputInventoryTransactionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputInventoryTransactionId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setOutputInventoryTransactionId(?string $outputInventoryTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($outputInventoryTransactionId) && !is_string($outputInventoryTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputInventoryTransactionId, true), gettype($outputInventoryTransactionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($outputInventoryTransactionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $outputInventoryTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($outputInventoryTransactionId, true)), __LINE__);
        }
        if (is_null($outputInventoryTransactionId) || (is_array($outputInventoryTransactionId) && empty($outputInventoryTransactionId))) {
            unset($this->OutputInventoryTransactionId);
        } else {
            $this->OutputInventoryTransactionId = $outputInventoryTransactionId;
        }
        
        return $this;
    }
    /**
     * Get ProductId value
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->ProductId;
    }
    /**
     * Set ProductId value
     * @param string $productId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($productId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($productId, true)), __LINE__);
        }
        $this->ProductId = $productId;
        
        return $this;
    }
    /**
     * Get ProductItemInventoryStatus value
     * @return string
     */
    public function getProductItemInventoryStatus(): ?string
    {
        return $this->ProductItemInventoryStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProductItemInventoryStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductItemInventoryStatus method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductItemInventoryStatusForListConstraintFromSetProductItemInventoryStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productItemInfoProductItemInventoryStatusItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemInventoryStatus::valueIsValid($productItemInfoProductItemInventoryStatusItem)) {
                $invalidValues[] = is_object($productItemInfoProductItemInventoryStatusItem) ? get_class($productItemInfoProductItemInventoryStatusItem) : sprintf('%s(%s)', gettype($productItemInfoProductItemInventoryStatusItem), var_export($productItemInfoProductItemInventoryStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemInventoryStatus', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemInventoryStatus::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductItemInventoryStatus value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemInventoryStatus::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemInventoryStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $productItemInventoryStatus
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setProductItemInventoryStatus($productItemInventoryStatus = null): self
    {
        // validation for constraint: list
        if ('' !== ($productItemInventoryStatusArrayErrorMessage = self::validateProductItemInventoryStatusForListConstraintFromSetProductItemInventoryStatus(is_string($productItemInventoryStatus) ? explode(' ', $productItemInventoryStatus) : $productItemInventoryStatus))) {
            throw new InvalidArgumentException($productItemInventoryStatusArrayErrorMessage, __LINE__);
        }
        $this->ProductItemInventoryStatus = is_array($productItemInventoryStatus) ? implode(' ', $productItemInventoryStatus) : $productItemInventoryStatus;
        
        return $this;
    }
    /**
     * Get ProductItemStatus value
     * @return string
     */
    public function getProductItemStatus(): ?string
    {
        return $this->ProductItemStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProductItemStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductItemStatus method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductItemStatusForListConstraintFromSetProductItemStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productItemInfoProductItemStatusItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemStatus::valueIsValid($productItemInfoProductItemStatusItem)) {
                $invalidValues[] = is_object($productItemInfoProductItemStatusItem) ? get_class($productItemInfoProductItemStatusItem) : sprintf('%s(%s)', gettype($productItemInfoProductItemStatusItem), var_export($productItemInfoProductItemStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemStatus', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemStatus::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductItemStatus value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemStatus::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\ProductItemStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $productItemStatus
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setProductItemStatus($productItemStatus = null): self
    {
        // validation for constraint: list
        if ('' !== ($productItemStatusArrayErrorMessage = self::validateProductItemStatusForListConstraintFromSetProductItemStatus(is_string($productItemStatus) ? explode(' ', $productItemStatus) : $productItemStatus))) {
            throw new InvalidArgumentException($productItemStatusArrayErrorMessage, __LINE__);
        }
        $this->ProductItemStatus = is_array($productItemStatus) ? implode(' ', $productItemStatus) : $productItemStatus;
        
        return $this;
    }
    /**
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->ProductName ?? null;
    }
    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
        }
        
        return $this;
    }
    /**
     * Get ProductionDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductionDate(): ?string
    {
        return $this->ProductionDate ?? null;
    }
    /**
     * Set ProductionDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productionDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setProductionDate(?string $productionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($productionDate) && !is_string($productionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productionDate, true), gettype($productionDate)), __LINE__);
        }
        if (is_null($productionDate) || (is_array($productionDate) && empty($productionDate))) {
            unset($this->ProductionDate);
        } else {
            $this->ProductionDate = $productionDate;
        }
        
        return $this;
    }
    /**
     * Get WarrantyDurationMonths value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getWarrantyDurationMonths(): ?int
    {
        return $this->WarrantyDurationMonths ?? null;
    }
    /**
     * Set WarrantyDurationMonths value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $warrantyDurationMonths
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setWarrantyDurationMonths(?int $warrantyDurationMonths = null): self
    {
        // validation for constraint: int
        if (!is_null($warrantyDurationMonths) && !(is_int($warrantyDurationMonths) || ctype_digit($warrantyDurationMonths))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($warrantyDurationMonths, true), gettype($warrantyDurationMonths)), __LINE__);
        }
        if (is_null($warrantyDurationMonths) || (is_array($warrantyDurationMonths) && empty($warrantyDurationMonths))) {
            unset($this->WarrantyDurationMonths);
        } else {
            $this->WarrantyDurationMonths = $warrantyDurationMonths;
        }
        
        return $this;
    }
    /**
     * Get WarrantyEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarrantyEndDate(): ?string
    {
        return $this->WarrantyEndDate ?? null;
    }
    /**
     * Set WarrantyEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $warrantyEndDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setWarrantyEndDate(?string $warrantyEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($warrantyEndDate) && !is_string($warrantyEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyEndDate, true), gettype($warrantyEndDate)), __LINE__);
        }
        if (is_null($warrantyEndDate) || (is_array($warrantyEndDate) && empty($warrantyEndDate))) {
            unset($this->WarrantyEndDate);
        } else {
            $this->WarrantyEndDate = $warrantyEndDate;
        }
        
        return $this;
    }
    /**
     * Get WarrantyStartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarrantyStartDate(): ?string
    {
        return $this->WarrantyStartDate ?? null;
    }
    /**
     * Set WarrantyStartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $warrantyStartDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setWarrantyStartDate(?string $warrantyStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($warrantyStartDate) && !is_string($warrantyStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyStartDate, true), gettype($warrantyStartDate)), __LINE__);
        }
        if (is_null($warrantyStartDate) || (is_array($warrantyStartDate) && empty($warrantyStartDate))) {
            unset($this->WarrantyStartDate);
        } else {
            $this->WarrantyStartDate = $warrantyStartDate;
        }
        
        return $this;
    }
    /**
     * Get WarrantyStartType value
     * @return string
     */
    public function getWarrantyStartType(): ?string
    {
        return $this->WarrantyStartType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setWarrantyStartType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarrantyStartType method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarrantyStartTypeForListConstraintFromSetWarrantyStartType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productItemInfoWarrantyStartTypeItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\WarrantyStartType::valueIsValid($productItemInfoWarrantyStartTypeItem)) {
                $invalidValues[] = is_object($productItemInfoWarrantyStartTypeItem) ? get_class($productItemInfoWarrantyStartTypeItem) : sprintf('%s(%s)', gettype($productItemInfoWarrantyStartTypeItem), var_export($productItemInfoWarrantyStartTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\WarrantyStartType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\WarrantyStartType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WarrantyStartType value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\WarrantyStartType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\WarrantyStartType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $warrantyStartType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemInfo
     */
    public function setWarrantyStartType($warrantyStartType = null): self
    {
        // validation for constraint: list
        if ('' !== ($warrantyStartTypeArrayErrorMessage = self::validateWarrantyStartTypeForListConstraintFromSetWarrantyStartType(is_string($warrantyStartType) ? explode(' ', $warrantyStartType) : $warrantyStartType))) {
            throw new InvalidArgumentException($warrantyStartTypeArrayErrorMessage, __LINE__);
        }
        $this->WarrantyStartType = is_array($warrantyStartType) ? implode(' ', $warrantyStartType) : $warrantyStartType;
        
        return $this;
    }
}
