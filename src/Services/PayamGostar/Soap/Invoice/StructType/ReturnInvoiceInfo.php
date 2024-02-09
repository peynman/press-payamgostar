<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnInvoiceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReturnInvoiceInfo
 * @subpackage Structs
 */
class ReturnInvoiceInfo extends BaseBillableObjectInfo
{
    /**
     * The AdditionalCosts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $AdditionalCosts = null;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo $Details = null;
    /**
     * The Discount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Discount = null;
    /**
     * The DiscountPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $DiscountPercent = null;
    /**
     * The InvoiceDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceDate = null;
    /**
     * The InvoiceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceType = null;
    /**
     * The Toll
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Toll = null;
    /**
     * The TollPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TollPercent = null;
    /**
     * The TotalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalValue = null;
    /**
     * The Vat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Vat = null;
    /**
     * The VatPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VatPercent = null;
    /**
     * Constructor method for ReturnInvoiceInfo
     * @uses ReturnInvoiceInfo::setAdditionalCosts()
     * @uses ReturnInvoiceInfo::setDetails()
     * @uses ReturnInvoiceInfo::setDiscount()
     * @uses ReturnInvoiceInfo::setDiscountPercent()
     * @uses ReturnInvoiceInfo::setInvoiceDate()
     * @uses ReturnInvoiceInfo::setInvoiceType()
     * @uses ReturnInvoiceInfo::setToll()
     * @uses ReturnInvoiceInfo::setTollPercent()
     * @uses ReturnInvoiceInfo::setTotalValue()
     * @uses ReturnInvoiceInfo::setVat()
     * @uses ReturnInvoiceInfo::setVatPercent()
     * @param float $additionalCosts
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo $details
     * @param float $discount
     * @param float $discountPercent
     * @param string $invoiceDate
     * @param string $invoiceType
     * @param float $toll
     * @param int $tollPercent
     * @param float $totalValue
     * @param float $vat
     * @param int $vatPercent
     */
    public function __construct(?float $additionalCosts = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo $details = null, ?float $discount = null, ?float $discountPercent = null, ?string $invoiceDate = null, ?string $invoiceType = null, ?float $toll = null, ?int $tollPercent = null, ?float $totalValue = null, ?float $vat = null, ?int $vatPercent = null)
    {
        $this
            ->setAdditionalCosts($additionalCosts)
            ->setDetails($details)
            ->setDiscount($discount)
            ->setDiscountPercent($discountPercent)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceType($invoiceType)
            ->setToll($toll)
            ->setTollPercent($tollPercent)
            ->setTotalValue($totalValue)
            ->setVat($vat)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get AdditionalCosts value
     * @return float|null
     */
    public function getAdditionalCosts(): ?float
    {
        return $this->AdditionalCosts;
    }
    /**
     * Set AdditionalCosts value
     * @param float $additionalCosts
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setAdditionalCosts(?float $additionalCosts = null): self
    {
        // validation for constraint: float
        if (!is_null($additionalCosts) && !(is_float($additionalCosts) || is_numeric($additionalCosts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($additionalCosts, true), gettype($additionalCosts)), __LINE__);
        }
        $this->AdditionalCosts = $additionalCosts;
        
        return $this;
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo|null
     */
    public function getDetails(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo
    {
        return $this->Details ?? null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo $details
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setDetails(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfReturnInvoiceDetailInfo $details = null): self
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        
        return $this;
    }
    /**
     * Get Discount value
     * @return float|null
     */
    public function getDiscount(): ?float
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param float $discount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setDiscount(?float $discount = null): self
    {
        // validation for constraint: float
        if (!is_null($discount) && !(is_float($discount) || is_numeric($discount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discount, true), gettype($discount)), __LINE__);
        }
        $this->Discount = $discount;
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
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
     * Get InvoiceDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->InvoiceDate ?? null;
    }
    /**
     * Set InvoiceDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        if (is_null($invoiceDate) || (is_array($invoiceDate) && empty($invoiceDate))) {
            unset($this->InvoiceDate);
        } else {
            $this->InvoiceDate = $invoiceDate;
        }
        
        return $this;
    }
    /**
     * Get InvoiceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceType(): ?string
    {
        return $this->InvoiceType ?? null;
    }
    /**
     * Set InvoiceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setInvoiceType(?string $invoiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceType) && !is_string($invoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceType, true), gettype($invoiceType)), __LINE__);
        }
        if (is_null($invoiceType) || (is_array($invoiceType) && empty($invoiceType))) {
            unset($this->InvoiceType);
        } else {
            $this->InvoiceType = $invoiceType;
        }
        
        return $this;
    }
    /**
     * Get Toll value
     * @return float|null
     */
    public function getToll(): ?float
    {
        return $this->Toll;
    }
    /**
     * Set Toll value
     * @param float $toll
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setToll(?float $toll = null): self
    {
        // validation for constraint: float
        if (!is_null($toll) && !(is_float($toll) || is_numeric($toll))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($toll, true), gettype($toll)), __LINE__);
        }
        $this->Toll = $toll;
        
        return $this;
    }
    /**
     * Get TollPercent value
     * @return int|null
     */
    public function getTollPercent(): ?int
    {
        return $this->TollPercent;
    }
    /**
     * Set TollPercent value
     * @param int $tollPercent
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setTollPercent(?int $tollPercent = null): self
    {
        // validation for constraint: int
        if (!is_null($tollPercent) && !(is_int($tollPercent) || ctype_digit($tollPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tollPercent, true), gettype($tollPercent)), __LINE__);
        }
        $this->TollPercent = $tollPercent;
        
        return $this;
    }
    /**
     * Get TotalValue value
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->TotalValue;
    }
    /**
     * Set TotalValue value
     * @param float $totalValue
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setTotalValue(?float $totalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($totalValue) && !(is_float($totalValue) || is_numeric($totalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalValue, true), gettype($totalValue)), __LINE__);
        }
        $this->TotalValue = $totalValue;
        
        return $this;
    }
    /**
     * Get Vat value
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->Vat;
    }
    /**
     * Set Vat value
     * @param float $vat
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setVat(?float $vat = null): self
    {
        // validation for constraint: float
        if (!is_null($vat) && !(is_float($vat) || is_numeric($vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        $this->Vat = $vat;
        
        return $this;
    }
    /**
     * Get VatPercent value
     * @return int|null
     */
    public function getVatPercent(): ?int
    {
        return $this->VatPercent;
    }
    /**
     * Set VatPercent value
     * @param int $vatPercent
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
     */
    public function setVatPercent(?int $vatPercent = null): self
    {
        // validation for constraint: int
        if (!is_null($vatPercent) && !(is_int($vatPercent) || ctype_digit($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->VatPercent = $vatPercent;
        
        return $this;
    }
}
