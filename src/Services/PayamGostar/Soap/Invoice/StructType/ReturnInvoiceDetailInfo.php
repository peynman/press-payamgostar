<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnInvoiceDetailInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReturnInvoiceDetailInfo
 * @subpackage Structs
 */
class ReturnInvoiceDetailInfo extends AbstractStructBase
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
     * The DiscountCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $DiscountCount = null;
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
     * The ProductCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductCode = null;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The RelatedInvoices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo $RelatedInvoices = null;
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
     * Constructor method for ReturnInvoiceDetailInfo
     * @uses ReturnInvoiceDetailInfo::setBaseUnitPrice()
     * @uses ReturnInvoiceDetailInfo::setCount()
     * @uses ReturnInvoiceDetailInfo::setDetailDescription()
     * @uses ReturnInvoiceDetailInfo::setDiscountCount()
     * @uses ReturnInvoiceDetailInfo::setFinalUnitPrice()
     * @uses ReturnInvoiceDetailInfo::setId()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty0()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty1()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty10()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty2()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty3()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty4()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty5()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty6()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty7()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty8()
     * @uses ReturnInvoiceDetailInfo::setInvoiceProperty9()
     * @uses ReturnInvoiceDetailInfo::setProductCode()
     * @uses ReturnInvoiceDetailInfo::setProductName()
     * @uses ReturnInvoiceDetailInfo::setRelatedInvoices()
     * @uses ReturnInvoiceDetailInfo::setSerial()
     * @uses ReturnInvoiceDetailInfo::setTotalDiscount()
     * @uses ReturnInvoiceDetailInfo::setTotalToll()
     * @uses ReturnInvoiceDetailInfo::setTotalUnitPrice()
     * @uses ReturnInvoiceDetailInfo::setTotalVat()
     * @param float $baseUnitPrice
     * @param float $count
     * @param string $detailDescription
     * @param float $discountCount
     * @param float $finalUnitPrice
     * @param int $id
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
     * @param string $productCode
     * @param string $productName
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo $relatedInvoices
     * @param string $serial
     * @param float $totalDiscount
     * @param float $totalToll
     * @param float $totalUnitPrice
     * @param float $totalVat
     */
    public function __construct(?float $baseUnitPrice = null, ?float $count = null, ?string $detailDescription = null, ?float $discountCount = null, ?float $finalUnitPrice = null, ?int $id = null, ?string $invoiceProperty0 = null, ?string $invoiceProperty1 = null, ?string $invoiceProperty10 = null, ?string $invoiceProperty2 = null, ?string $invoiceProperty3 = null, ?string $invoiceProperty4 = null, ?string $invoiceProperty5 = null, ?string $invoiceProperty6 = null, ?string $invoiceProperty7 = null, ?string $invoiceProperty8 = null, ?string $invoiceProperty9 = null, ?string $productCode = null, ?string $productName = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo $relatedInvoices = null, ?string $serial = null, ?float $totalDiscount = null, ?float $totalToll = null, ?float $totalUnitPrice = null, ?float $totalVat = null)
    {
        $this
            ->setBaseUnitPrice($baseUnitPrice)
            ->setCount($count)
            ->setDetailDescription($detailDescription)
            ->setDiscountCount($discountCount)
            ->setFinalUnitPrice($finalUnitPrice)
            ->setId($id)
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
            ->setProductCode($productCode)
            ->setProductName($productName)
            ->setRelatedInvoices($relatedInvoices)
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * Get DiscountCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDiscountCount(): ?float
    {
        return $this->DiscountCount ?? null;
    }
    /**
     * Set DiscountCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $discountCount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
     */
    public function setDiscountCount(?float $discountCount = null): self
    {
        // validation for constraint: float
        if (!is_null($discountCount) && !(is_float($discountCount) || is_numeric($discountCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountCount, true), gettype($discountCount)), __LINE__);
        }
        if (is_null($discountCount) || (is_array($discountCount) && empty($discountCount))) {
            unset($this->DiscountCount);
        } else {
            $this->DiscountCount = $discountCount;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * Get RelatedInvoices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo|null
     */
    public function getRelatedInvoices(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo
    {
        return $this->RelatedInvoices ?? null;
    }
    /**
     * Set RelatedInvoices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo $relatedInvoices
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
     */
    public function setRelatedInvoices(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfRelatedReturnInvoiceDetailInfo $relatedInvoices = null): self
    {
        if (is_null($relatedInvoices) || (is_array($relatedInvoices) && empty($relatedInvoices))) {
            unset($this->RelatedInvoices);
        } else {
            $this->RelatedInvoices = $relatedInvoices;
        }
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceDetailInfo
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
