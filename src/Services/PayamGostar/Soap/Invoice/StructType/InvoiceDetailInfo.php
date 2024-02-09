<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDetailInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InvoiceDetailInfo
 * @subpackage Structs
 */
class InvoiceDetailInfo extends AbstractStructBase
{
    /**
     * The BaseUnitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $BaseUnitPrice = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Count = null;
    /**
     * The DetailDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DetailDescription = null;
    /**
     * The DiscountPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $DiscountPercent = null;
    /**
     * The FinalUnitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $FinalUnitPrice = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The InventoryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InventoryCode = null;
    /**
     * The InventoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InventoryName = null;
    /**
     * The InvoiceProperty0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty0 = null;
    /**
     * The InvoiceProperty1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty1 = null;
    /**
     * The InvoiceProperty10
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty10 = null;
    /**
     * The InvoiceProperty2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty2 = null;
    /**
     * The InvoiceProperty3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty3 = null;
    /**
     * The InvoiceProperty4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty4 = null;
    /**
     * The InvoiceProperty5
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty5 = null;
    /**
     * The InvoiceProperty6
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty6 = null;
    /**
     * The InvoiceProperty7
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty7 = null;
    /**
     * The InvoiceProperty8
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty8 = null;
    /**
     * The InvoiceProperty9
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceProperty9 = null;
    /**
     * The IsService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsService = null;
    /**
     * The ProductCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductCode = null;
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
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The ProductUnitTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductUnitTypeName = null;
    /**
     * The ReturnedCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ReturnedCount = null;
    /**
     * The Serial
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Serial = null;
    /**
     * The TotalDiscount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalDiscount = null;
    /**
     * The TotalToll
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalToll = null;
    /**
     * The TotalUnitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalUnitPrice = null;
    /**
     * The TotalVat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalVat = null;
    /**
     * Constructor method for InvoiceDetailInfo
     * @uses InvoiceDetailInfo::setBaseUnitPrice()
     * @uses InvoiceDetailInfo::setCount()
     * @uses InvoiceDetailInfo::setDetailDescription()
     * @uses InvoiceDetailInfo::setDiscountPercent()
     * @uses InvoiceDetailInfo::setFinalUnitPrice()
     * @uses InvoiceDetailInfo::setId()
     * @uses InvoiceDetailInfo::setInventoryCode()
     * @uses InvoiceDetailInfo::setInventoryName()
     * @uses InvoiceDetailInfo::setInvoiceProperty0()
     * @uses InvoiceDetailInfo::setInvoiceProperty1()
     * @uses InvoiceDetailInfo::setInvoiceProperty10()
     * @uses InvoiceDetailInfo::setInvoiceProperty2()
     * @uses InvoiceDetailInfo::setInvoiceProperty3()
     * @uses InvoiceDetailInfo::setInvoiceProperty4()
     * @uses InvoiceDetailInfo::setInvoiceProperty5()
     * @uses InvoiceDetailInfo::setInvoiceProperty6()
     * @uses InvoiceDetailInfo::setInvoiceProperty7()
     * @uses InvoiceDetailInfo::setInvoiceProperty8()
     * @uses InvoiceDetailInfo::setInvoiceProperty9()
     * @uses InvoiceDetailInfo::setIsService()
     * @uses InvoiceDetailInfo::setProductCode()
     * @uses InvoiceDetailInfo::setProductId()
     * @uses InvoiceDetailInfo::setProductName()
     * @uses InvoiceDetailInfo::setProductUnitTypeName()
     * @uses InvoiceDetailInfo::setReturnedCount()
     * @uses InvoiceDetailInfo::setSerial()
     * @uses InvoiceDetailInfo::setTotalDiscount()
     * @uses InvoiceDetailInfo::setTotalToll()
     * @uses InvoiceDetailInfo::setTotalUnitPrice()
     * @uses InvoiceDetailInfo::setTotalVat()
     * @param float $baseUnitPrice
     * @param float $count
     * @param string $detailDescription
     * @param float $discountPercent
     * @param float $finalUnitPrice
     * @param int $id
     * @param string $inventoryCode
     * @param string $inventoryName
     * @param string $invoiceProperty0
     * @param string $invoiceProperty1
     * @param string $invoiceProperty10
     * @param string $invoiceProperty2
     * @param string $invoiceProperty3
     * @param string $invoiceProperty4
     * @param string $invoiceProperty5
     * @param string $invoiceProperty6
     * @param string $invoiceProperty7
     * @param string $invoiceProperty8
     * @param string $invoiceProperty9
     * @param bool $isService
     * @param string $productCode
     * @param string $productId
     * @param string $productName
     * @param string $productUnitTypeName
     * @param float $returnedCount
     * @param string $serial
     * @param float $totalDiscount
     * @param float $totalToll
     * @param float $totalUnitPrice
     * @param float $totalVat
     */
    public function __construct(?float $baseUnitPrice = null, ?float $count = null, ?string $detailDescription = null, ?float $discountPercent = null, ?float $finalUnitPrice = null, ?int $id = null, ?string $inventoryCode = null, ?string $inventoryName = null, ?string $invoiceProperty0 = null, ?string $invoiceProperty1 = null, ?string $invoiceProperty10 = null, ?string $invoiceProperty2 = null, ?string $invoiceProperty3 = null, ?string $invoiceProperty4 = null, ?string $invoiceProperty5 = null, ?string $invoiceProperty6 = null, ?string $invoiceProperty7 = null, ?string $invoiceProperty8 = null, ?string $invoiceProperty9 = null, ?bool $isService = null, ?string $productCode = null, ?string $productId = null, ?string $productName = null, ?string $productUnitTypeName = null, ?float $returnedCount = null, ?string $serial = null, ?float $totalDiscount = null, ?float $totalToll = null, ?float $totalUnitPrice = null, ?float $totalVat = null)
    {
        $this
            ->setBaseUnitPrice($baseUnitPrice)
            ->setCount($count)
            ->setDetailDescription($detailDescription)
            ->setDiscountPercent($discountPercent)
            ->setFinalUnitPrice($finalUnitPrice)
            ->setId($id)
            ->setInventoryCode($inventoryCode)
            ->setInventoryName($inventoryName)
            ->setInvoiceProperty0($invoiceProperty0)
            ->setInvoiceProperty1($invoiceProperty1)
            ->setInvoiceProperty10($invoiceProperty10)
            ->setInvoiceProperty2($invoiceProperty2)
            ->setInvoiceProperty3($invoiceProperty3)
            ->setInvoiceProperty4($invoiceProperty4)
            ->setInvoiceProperty5($invoiceProperty5)
            ->setInvoiceProperty6($invoiceProperty6)
            ->setInvoiceProperty7($invoiceProperty7)
            ->setInvoiceProperty8($invoiceProperty8)
            ->setInvoiceProperty9($invoiceProperty9)
            ->setIsService($isService)
            ->setProductCode($productCode)
            ->setProductId($productId)
            ->setProductName($productName)
            ->setProductUnitTypeName($productUnitTypeName)
            ->setReturnedCount($returnedCount)
            ->setSerial($serial)
            ->setTotalDiscount($totalDiscount)
            ->setTotalToll($totalToll)
            ->setTotalUnitPrice($totalUnitPrice)
            ->setTotalVat($totalVat);
    }
    /**
     * Get BaseUnitPrice value
     * @return float|null
     */
    public function getBaseUnitPrice(): ?float
    {
        return $this->BaseUnitPrice;
    }
    /**
     * Set BaseUnitPrice value
     * @param float $baseUnitPrice
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setBaseUnitPrice(?float $baseUnitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($baseUnitPrice) && !(is_float($baseUnitPrice) || is_numeric($baseUnitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseUnitPrice, true), gettype($baseUnitPrice)), __LINE__);
        }
        $this->BaseUnitPrice = $baseUnitPrice;
        
        return $this;
    }
    /**
     * Get Count value
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param float $count
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setCount(?float $count = null): self
    {
        // validation for constraint: float
        if (!is_null($count) && !(is_float($count) || is_numeric($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get DetailDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDetailDescription(): ?string
    {
        return $this->DetailDescription ?? null;
    }
    /**
     * Set DetailDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $detailDescription
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setDetailDescription(?string $detailDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($detailDescription) && !is_string($detailDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailDescription, true), gettype($detailDescription)), __LINE__);
        }
        if (is_null($detailDescription) || (is_array($detailDescription) && empty($detailDescription))) {
            unset($this->DetailDescription);
        } else {
            $this->DetailDescription = $detailDescription;
        }
        
        return $this;
    }
    /**
     * Get DiscountPercent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDiscountPercent(): ?float
    {
        return $this->DiscountPercent ?? null;
    }
    /**
     * Set DiscountPercent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $discountPercent
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setDiscountPercent(?float $discountPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($discountPercent) && !(is_float($discountPercent) || is_numeric($discountPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountPercent, true), gettype($discountPercent)), __LINE__);
        }
        if (is_null($discountPercent) || (is_array($discountPercent) && empty($discountPercent))) {
            unset($this->DiscountPercent);
        } else {
            $this->DiscountPercent = $discountPercent;
        }
        
        return $this;
    }
    /**
     * Get FinalUnitPrice value
     * @return float|null
     */
    public function getFinalUnitPrice(): ?float
    {
        return $this->FinalUnitPrice;
    }
    /**
     * Set FinalUnitPrice value
     * @param float $finalUnitPrice
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setFinalUnitPrice(?float $finalUnitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($finalUnitPrice) && !(is_float($finalUnitPrice) || is_numeric($finalUnitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($finalUnitPrice, true), gettype($finalUnitPrice)), __LINE__);
        }
        $this->FinalUnitPrice = $finalUnitPrice;
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get InventoryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventoryCode(): ?string
    {
        return $this->InventoryCode ?? null;
    }
    /**
     * Set InventoryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventoryCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInventoryCode(?string $inventoryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($inventoryCode) && !is_string($inventoryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryCode, true), gettype($inventoryCode)), __LINE__);
        }
        if (is_null($inventoryCode) || (is_array($inventoryCode) && empty($inventoryCode))) {
            unset($this->InventoryCode);
        } else {
            $this->InventoryCode = $inventoryCode;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
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
     * Get InvoiceProperty0 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty0(): ?string
    {
        return $this->InvoiceProperty0 ?? null;
    }
    /**
     * Set InvoiceProperty0 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty0
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty0(?string $invoiceProperty0 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty0) && !is_string($invoiceProperty0)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty0, true), gettype($invoiceProperty0)), __LINE__);
        }
        if (is_null($invoiceProperty0) || (is_array($invoiceProperty0) && empty($invoiceProperty0))) {
            unset($this->InvoiceProperty0);
        } else {
            $this->InvoiceProperty0 = $invoiceProperty0;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty1(): ?string
    {
        return $this->InvoiceProperty1 ?? null;
    }
    /**
     * Set InvoiceProperty1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty1
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty1(?string $invoiceProperty1 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty1) && !is_string($invoiceProperty1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty1, true), gettype($invoiceProperty1)), __LINE__);
        }
        if (is_null($invoiceProperty1) || (is_array($invoiceProperty1) && empty($invoiceProperty1))) {
            unset($this->InvoiceProperty1);
        } else {
            $this->InvoiceProperty1 = $invoiceProperty1;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty10 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty10(): ?string
    {
        return $this->InvoiceProperty10 ?? null;
    }
    /**
     * Set InvoiceProperty10 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty10
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty10(?string $invoiceProperty10 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty10) && !is_string($invoiceProperty10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty10, true), gettype($invoiceProperty10)), __LINE__);
        }
        if (is_null($invoiceProperty10) || (is_array($invoiceProperty10) && empty($invoiceProperty10))) {
            unset($this->InvoiceProperty10);
        } else {
            $this->InvoiceProperty10 = $invoiceProperty10;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty2(): ?string
    {
        return $this->InvoiceProperty2 ?? null;
    }
    /**
     * Set InvoiceProperty2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty2
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty2(?string $invoiceProperty2 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty2) && !is_string($invoiceProperty2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty2, true), gettype($invoiceProperty2)), __LINE__);
        }
        if (is_null($invoiceProperty2) || (is_array($invoiceProperty2) && empty($invoiceProperty2))) {
            unset($this->InvoiceProperty2);
        } else {
            $this->InvoiceProperty2 = $invoiceProperty2;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty3(): ?string
    {
        return $this->InvoiceProperty3 ?? null;
    }
    /**
     * Set InvoiceProperty3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty3
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty3(?string $invoiceProperty3 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty3) && !is_string($invoiceProperty3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty3, true), gettype($invoiceProperty3)), __LINE__);
        }
        if (is_null($invoiceProperty3) || (is_array($invoiceProperty3) && empty($invoiceProperty3))) {
            unset($this->InvoiceProperty3);
        } else {
            $this->InvoiceProperty3 = $invoiceProperty3;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty4 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty4(): ?string
    {
        return $this->InvoiceProperty4 ?? null;
    }
    /**
     * Set InvoiceProperty4 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty4
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty4(?string $invoiceProperty4 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty4) && !is_string($invoiceProperty4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty4, true), gettype($invoiceProperty4)), __LINE__);
        }
        if (is_null($invoiceProperty4) || (is_array($invoiceProperty4) && empty($invoiceProperty4))) {
            unset($this->InvoiceProperty4);
        } else {
            $this->InvoiceProperty4 = $invoiceProperty4;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty5 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty5(): ?string
    {
        return $this->InvoiceProperty5 ?? null;
    }
    /**
     * Set InvoiceProperty5 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty5
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty5(?string $invoiceProperty5 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty5) && !is_string($invoiceProperty5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty5, true), gettype($invoiceProperty5)), __LINE__);
        }
        if (is_null($invoiceProperty5) || (is_array($invoiceProperty5) && empty($invoiceProperty5))) {
            unset($this->InvoiceProperty5);
        } else {
            $this->InvoiceProperty5 = $invoiceProperty5;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty6 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty6(): ?string
    {
        return $this->InvoiceProperty6 ?? null;
    }
    /**
     * Set InvoiceProperty6 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty6
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty6(?string $invoiceProperty6 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty6) && !is_string($invoiceProperty6)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty6, true), gettype($invoiceProperty6)), __LINE__);
        }
        if (is_null($invoiceProperty6) || (is_array($invoiceProperty6) && empty($invoiceProperty6))) {
            unset($this->InvoiceProperty6);
        } else {
            $this->InvoiceProperty6 = $invoiceProperty6;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty7 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty7(): ?string
    {
        return $this->InvoiceProperty7 ?? null;
    }
    /**
     * Set InvoiceProperty7 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty7
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty7(?string $invoiceProperty7 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty7) && !is_string($invoiceProperty7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty7, true), gettype($invoiceProperty7)), __LINE__);
        }
        if (is_null($invoiceProperty7) || (is_array($invoiceProperty7) && empty($invoiceProperty7))) {
            unset($this->InvoiceProperty7);
        } else {
            $this->InvoiceProperty7 = $invoiceProperty7;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty8 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty8(): ?string
    {
        return $this->InvoiceProperty8 ?? null;
    }
    /**
     * Set InvoiceProperty8 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty8
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty8(?string $invoiceProperty8 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty8) && !is_string($invoiceProperty8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty8, true), gettype($invoiceProperty8)), __LINE__);
        }
        if (is_null($invoiceProperty8) || (is_array($invoiceProperty8) && empty($invoiceProperty8))) {
            unset($this->InvoiceProperty8);
        } else {
            $this->InvoiceProperty8 = $invoiceProperty8;
        }
        
        return $this;
    }
    /**
     * Get InvoiceProperty9 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceProperty9(): ?string
    {
        return $this->InvoiceProperty9 ?? null;
    }
    /**
     * Set InvoiceProperty9 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceProperty9
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setInvoiceProperty9(?string $invoiceProperty9 = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceProperty9) && !is_string($invoiceProperty9)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceProperty9, true), gettype($invoiceProperty9)), __LINE__);
        }
        if (is_null($invoiceProperty9) || (is_array($invoiceProperty9) && empty($invoiceProperty9))) {
            unset($this->InvoiceProperty9);
        } else {
            $this->InvoiceProperty9 = $invoiceProperty9;
        }
        
        return $this;
    }
    /**
     * Get IsService value
     * @return bool|null
     */
    public function getIsService(): ?bool
    {
        return $this->IsService;
    }
    /**
     * Set IsService value
     * @param bool $isService
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setIsService(?bool $isService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isService) && !is_bool($isService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isService, true), gettype($isService)), __LINE__);
        }
        $this->IsService = $isService;
        
        return $this;
    }
    /**
     * Get ProductCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->ProductCode ?? null;
    }
    /**
     * Set ProductCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        if (is_null($productCode) || (is_array($productCode) && empty($productCode))) {
            unset($this->ProductCode);
        } else {
            $this->ProductCode = $productCode;
        }
        
        return $this;
    }
    /**
     * Get ProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->ProductId ?? null;
    }
    /**
     * Set ProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
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
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->ProductId);
        } else {
            $this->ProductId = $productId;
        }
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
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
     * Get ProductUnitTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductUnitTypeName(): ?string
    {
        return $this->ProductUnitTypeName ?? null;
    }
    /**
     * Set ProductUnitTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productUnitTypeName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setProductUnitTypeName(?string $productUnitTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($productUnitTypeName) && !is_string($productUnitTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productUnitTypeName, true), gettype($productUnitTypeName)), __LINE__);
        }
        if (is_null($productUnitTypeName) || (is_array($productUnitTypeName) && empty($productUnitTypeName))) {
            unset($this->ProductUnitTypeName);
        } else {
            $this->ProductUnitTypeName = $productUnitTypeName;
        }
        
        return $this;
    }
    /**
     * Get ReturnedCount value
     * @return float|null
     */
    public function getReturnedCount(): ?float
    {
        return $this->ReturnedCount;
    }
    /**
     * Set ReturnedCount value
     * @param float $returnedCount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setReturnedCount(?float $returnedCount = null): self
    {
        // validation for constraint: float
        if (!is_null($returnedCount) && !(is_float($returnedCount) || is_numeric($returnedCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($returnedCount, true), gettype($returnedCount)), __LINE__);
        }
        $this->ReturnedCount = $returnedCount;
        
        return $this;
    }
    /**
     * Get Serial value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSerial(): ?string
    {
        return $this->Serial ?? null;
    }
    /**
     * Set Serial value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serial
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setSerial(?string $serial = null): self
    {
        // validation for constraint: string
        if (!is_null($serial) && !is_string($serial)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serial, true), gettype($serial)), __LINE__);
        }
        if (is_null($serial) || (is_array($serial) && empty($serial))) {
            unset($this->Serial);
        } else {
            $this->Serial = $serial;
        }
        
        return $this;
    }
    /**
     * Get TotalDiscount value
     * @return float|null
     */
    public function getTotalDiscount(): ?float
    {
        return $this->TotalDiscount;
    }
    /**
     * Set TotalDiscount value
     * @param float $totalDiscount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setTotalDiscount(?float $totalDiscount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDiscount) && !(is_float($totalDiscount) || is_numeric($totalDiscount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDiscount, true), gettype($totalDiscount)), __LINE__);
        }
        $this->TotalDiscount = $totalDiscount;
        
        return $this;
    }
    /**
     * Get TotalToll value
     * @return float|null
     */
    public function getTotalToll(): ?float
    {
        return $this->TotalToll;
    }
    /**
     * Set TotalToll value
     * @param float $totalToll
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setTotalToll(?float $totalToll = null): self
    {
        // validation for constraint: float
        if (!is_null($totalToll) && !(is_float($totalToll) || is_numeric($totalToll))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalToll, true), gettype($totalToll)), __LINE__);
        }
        $this->TotalToll = $totalToll;
        
        return $this;
    }
    /**
     * Get TotalUnitPrice value
     * @return float|null
     */
    public function getTotalUnitPrice(): ?float
    {
        return $this->TotalUnitPrice;
    }
    /**
     * Set TotalUnitPrice value
     * @param float $totalUnitPrice
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setTotalUnitPrice(?float $totalUnitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalUnitPrice) && !(is_float($totalUnitPrice) || is_numeric($totalUnitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalUnitPrice, true), gettype($totalUnitPrice)), __LINE__);
        }
        $this->TotalUnitPrice = $totalUnitPrice;
        
        return $this;
    }
    /**
     * Get TotalVat value
     * @return float|null
     */
    public function getTotalVat(): ?float
    {
        return $this->TotalVat;
    }
    /**
     * Set TotalVat value
     * @param float $totalVat
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceDetailInfo
     */
    public function setTotalVat(?float $totalVat = null): self
    {
        // validation for constraint: float
        if (!is_null($totalVat) && !(is_float($totalVat) || is_numeric($totalVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalVat, true), gettype($totalVat)), __LINE__);
        }
        $this->TotalVat = $totalVat;
        
        return $this;
    }
}
