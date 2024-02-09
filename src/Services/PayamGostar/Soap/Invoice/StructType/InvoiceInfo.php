<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InvoiceInfo
 * @subpackage Structs
 */
class InvoiceInfo extends BaseBillableObjectInfo
{
    /**
     * The AdditionalCosts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $AdditionalCosts = null;
    /**
     * The AssignedTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AssignedTo = null;
    /**
     * The AssignedToId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AssignedToId = null;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo $Details = null;
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
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExpireDate = null;
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
     * The PriceListName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PriceListName = null;
    /**
     * The QuoteId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $QuoteId = null;
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
     * The TotalDiscountPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalDiscountPercent = null;
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
     * Constructor method for InvoiceInfo
     * @uses InvoiceInfo::setAdditionalCosts()
     * @uses InvoiceInfo::setAssignedTo()
     * @uses InvoiceInfo::setAssignedToId()
     * @uses InvoiceInfo::setDetails()
     * @uses InvoiceInfo::setDiscount()
     * @uses InvoiceInfo::setDiscountPercent()
     * @uses InvoiceInfo::setExpireDate()
     * @uses InvoiceInfo::setInvoiceDate()
     * @uses InvoiceInfo::setInvoiceType()
     * @uses InvoiceInfo::setPriceListName()
     * @uses InvoiceInfo::setQuoteId()
     * @uses InvoiceInfo::setToll()
     * @uses InvoiceInfo::setTollPercent()
     * @uses InvoiceInfo::setTotalDiscountPercent()
     * @uses InvoiceInfo::setTotalValue()
     * @uses InvoiceInfo::setVat()
     * @uses InvoiceInfo::setVatPercent()
     * @param float $additionalCosts
     * @param string $assignedTo
     * @param string $assignedToId
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo $details
     * @param float $discount
     * @param float $discountPercent
     * @param string $expireDate
     * @param string $invoiceDate
     * @param string $invoiceType
     * @param string $priceListName
     * @param string $quoteId
     * @param float $toll
     * @param int $tollPercent
     * @param float $totalDiscountPercent
     * @param float $totalValue
     * @param float $vat
     * @param int $vatPercent
     */
    public function __construct(?float $additionalCosts = null, ?string $assignedTo = null, ?string $assignedToId = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo $details = null, ?float $discount = null, ?float $discountPercent = null, ?string $expireDate = null, ?string $invoiceDate = null, ?string $invoiceType = null, ?string $priceListName = null, ?string $quoteId = null, ?float $toll = null, ?int $tollPercent = null, ?float $totalDiscountPercent = null, ?float $totalValue = null, ?float $vat = null, ?int $vatPercent = null)
    {
        $this
            ->setAdditionalCosts($additionalCosts)
            ->setAssignedTo($assignedTo)
            ->setAssignedToId($assignedToId)
            ->setDetails($details)
            ->setDiscount($discount)
            ->setDiscountPercent($discountPercent)
            ->setExpireDate($expireDate)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceType($invoiceType)
            ->setPriceListName($priceListName)
            ->setQuoteId($quoteId)
            ->setToll($toll)
            ->setTollPercent($tollPercent)
            ->setTotalDiscountPercent($totalDiscountPercent)
            ->setTotalValue($totalValue)
            ->setVat($vat)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get AdditionalCosts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAdditionalCosts(): ?float
    {
        return $this->AdditionalCosts ?? null;
    }
    /**
     * Set AdditionalCosts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $additionalCosts
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setAdditionalCosts(?float $additionalCosts = null): self
    {
        // validation for constraint: float
        if (!is_null($additionalCosts) && !(is_float($additionalCosts) || is_numeric($additionalCosts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($additionalCosts, true), gettype($additionalCosts)), __LINE__);
        }
        if (is_null($additionalCosts) || (is_array($additionalCosts) && empty($additionalCosts))) {
            unset($this->AdditionalCosts);
        } else {
            $this->AdditionalCosts = $additionalCosts;
        }
        
        return $this;
    }
    /**
     * Get AssignedTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedTo(): ?string
    {
        return $this->AssignedTo ?? null;
    }
    /**
     * Set AssignedTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedTo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setAssignedTo(?string $assignedTo = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedTo) && !is_string($assignedTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedTo, true), gettype($assignedTo)), __LINE__);
        }
        if (is_null($assignedTo) || (is_array($assignedTo) && empty($assignedTo))) {
            unset($this->AssignedTo);
        } else {
            $this->AssignedTo = $assignedTo;
        }
        
        return $this;
    }
    /**
     * Get AssignedToId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedToId(): ?string
    {
        return $this->AssignedToId ?? null;
    }
    /**
     * Set AssignedToId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedToId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setAssignedToId(?string $assignedToId = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedToId) && !is_string($assignedToId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedToId, true), gettype($assignedToId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($assignedToId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $assignedToId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($assignedToId, true)), __LINE__);
        }
        if (is_null($assignedToId) || (is_array($assignedToId) && empty($assignedToId))) {
            unset($this->AssignedToId);
        } else {
            $this->AssignedToId = $assignedToId;
        }
        
        return $this;
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo|null
     */
    public function getDetails(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo
    {
        return $this->Details ?? null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo $details
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setDetails(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceDetailInfo $details = null): self
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * Get PriceListName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPriceListName(): ?string
    {
        return $this->PriceListName ?? null;
    }
    /**
     * Set PriceListName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $priceListName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setPriceListName(?string $priceListName = null): self
    {
        // validation for constraint: string
        if (!is_null($priceListName) && !is_string($priceListName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceListName, true), gettype($priceListName)), __LINE__);
        }
        if (is_null($priceListName) || (is_array($priceListName) && empty($priceListName))) {
            unset($this->PriceListName);
        } else {
            $this->PriceListName = $priceListName;
        }
        
        return $this;
    }
    /**
     * Get QuoteId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQuoteId(): ?string
    {
        return $this->QuoteId ?? null;
    }
    /**
     * Set QuoteId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $quoteId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setQuoteId(?string $quoteId = null): self
    {
        // validation for constraint: string
        if (!is_null($quoteId) && !is_string($quoteId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quoteId, true), gettype($quoteId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($quoteId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $quoteId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($quoteId, true)), __LINE__);
        }
        if (is_null($quoteId) || (is_array($quoteId) && empty($quoteId))) {
            unset($this->QuoteId);
        } else {
            $this->QuoteId = $quoteId;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * Get TotalDiscountPercent value
     * @return float|null
     */
    public function getTotalDiscountPercent(): ?float
    {
        return $this->TotalDiscountPercent;
    }
    /**
     * Set TotalDiscountPercent value
     * @param float $totalDiscountPercent
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
     */
    public function setTotalDiscountPercent(?float $totalDiscountPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDiscountPercent) && !(is_float($totalDiscountPercent) || is_numeric($totalDiscountPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDiscountPercent, true), gettype($totalDiscountPercent)), __LINE__);
        }
        $this->TotalDiscountPercent = $totalDiscountPercent;
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
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
