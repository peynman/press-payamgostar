<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpportunityInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OpportunityInfo
 * @subpackage Structs
 */
class OpportunityInfo extends GeneralCrmObjectInfo
{
    /**
     * The ClosedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClosedDate = null;
    /**
     * The ClosedDatePersian
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClosedDatePersian = null;
    /**
     * The FailDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FailDate = null;
    /**
     * The LostCause
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LostCause = null;
    /**
     * The OpportunitySourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OpportunitySourceType = null;
    /**
     * The OpportunityType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OpportunityType = null;
    /**
     * The Probability
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Probability = null;
    /**
     * The Products
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo $Products = null;
    /**
     * The SaleStage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SaleStage = null;
    /**
     * The SuccessDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SuccessDate = null;
    /**
     * The TotalDiscount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalDiscount = null;
    /**
     * The TotalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TotalValue = null;
    /**
     * The WonCause
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WonCause = null;
    /**
     * Constructor method for OpportunityInfo
     * @uses OpportunityInfo::setClosedDate()
     * @uses OpportunityInfo::setClosedDatePersian()
     * @uses OpportunityInfo::setFailDate()
     * @uses OpportunityInfo::setLostCause()
     * @uses OpportunityInfo::setOpportunitySourceType()
     * @uses OpportunityInfo::setOpportunityType()
     * @uses OpportunityInfo::setProbability()
     * @uses OpportunityInfo::setProducts()
     * @uses OpportunityInfo::setSaleStage()
     * @uses OpportunityInfo::setSuccessDate()
     * @uses OpportunityInfo::setTotalDiscount()
     * @uses OpportunityInfo::setTotalValue()
     * @uses OpportunityInfo::setWonCause()
     * @param string $closedDate
     * @param string $closedDatePersian
     * @param string $failDate
     * @param string $lostCause
     * @param string $opportunitySourceType
     * @param string $opportunityType
     * @param float $probability
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo $products
     * @param string $saleStage
     * @param string $successDate
     * @param float $totalDiscount
     * @param float $totalValue
     * @param string $wonCause
     */
    public function __construct(?string $closedDate = null, ?string $closedDatePersian = null, ?string $failDate = null, ?string $lostCause = null, ?string $opportunitySourceType = null, ?string $opportunityType = null, ?float $probability = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo $products = null, ?string $saleStage = null, ?string $successDate = null, ?float $totalDiscount = null, ?float $totalValue = null, ?string $wonCause = null)
    {
        $this
            ->setClosedDate($closedDate)
            ->setClosedDatePersian($closedDatePersian)
            ->setFailDate($failDate)
            ->setLostCause($lostCause)
            ->setOpportunitySourceType($opportunitySourceType)
            ->setOpportunityType($opportunityType)
            ->setProbability($probability)
            ->setProducts($products)
            ->setSaleStage($saleStage)
            ->setSuccessDate($successDate)
            ->setTotalDiscount($totalDiscount)
            ->setTotalValue($totalValue)
            ->setWonCause($wonCause);
    }
    /**
     * Get ClosedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClosedDate(): ?string
    {
        return $this->ClosedDate ?? null;
    }
    /**
     * Set ClosedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $closedDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setClosedDate(?string $closedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($closedDate) && !is_string($closedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closedDate, true), gettype($closedDate)), __LINE__);
        }
        if (is_null($closedDate) || (is_array($closedDate) && empty($closedDate))) {
            unset($this->ClosedDate);
        } else {
            $this->ClosedDate = $closedDate;
        }
        
        return $this;
    }
    /**
     * Get ClosedDatePersian value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClosedDatePersian(): ?string
    {
        return $this->ClosedDatePersian ?? null;
    }
    /**
     * Set ClosedDatePersian value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $closedDatePersian
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setClosedDatePersian(?string $closedDatePersian = null): self
    {
        // validation for constraint: string
        if (!is_null($closedDatePersian) && !is_string($closedDatePersian)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closedDatePersian, true), gettype($closedDatePersian)), __LINE__);
        }
        if (is_null($closedDatePersian) || (is_array($closedDatePersian) && empty($closedDatePersian))) {
            unset($this->ClosedDatePersian);
        } else {
            $this->ClosedDatePersian = $closedDatePersian;
        }
        
        return $this;
    }
    /**
     * Get FailDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFailDate(): ?string
    {
        return $this->FailDate ?? null;
    }
    /**
     * Set FailDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $failDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setFailDate(?string $failDate = null): self
    {
        // validation for constraint: string
        if (!is_null($failDate) && !is_string($failDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($failDate, true), gettype($failDate)), __LINE__);
        }
        if (is_null($failDate) || (is_array($failDate) && empty($failDate))) {
            unset($this->FailDate);
        } else {
            $this->FailDate = $failDate;
        }
        
        return $this;
    }
    /**
     * Get LostCause value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLostCause(): ?string
    {
        return $this->LostCause ?? null;
    }
    /**
     * Set LostCause value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lostCause
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setLostCause(?string $lostCause = null): self
    {
        // validation for constraint: string
        if (!is_null($lostCause) && !is_string($lostCause)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lostCause, true), gettype($lostCause)), __LINE__);
        }
        if (is_null($lostCause) || (is_array($lostCause) && empty($lostCause))) {
            unset($this->LostCause);
        } else {
            $this->LostCause = $lostCause;
        }
        
        return $this;
    }
    /**
     * Get OpportunitySourceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOpportunitySourceType(): ?string
    {
        return $this->OpportunitySourceType ?? null;
    }
    /**
     * Set OpportunitySourceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $opportunitySourceType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setOpportunitySourceType(?string $opportunitySourceType = null): self
    {
        // validation for constraint: string
        if (!is_null($opportunitySourceType) && !is_string($opportunitySourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opportunitySourceType, true), gettype($opportunitySourceType)), __LINE__);
        }
        if (is_null($opportunitySourceType) || (is_array($opportunitySourceType) && empty($opportunitySourceType))) {
            unset($this->OpportunitySourceType);
        } else {
            $this->OpportunitySourceType = $opportunitySourceType;
        }
        
        return $this;
    }
    /**
     * Get OpportunityType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOpportunityType(): ?string
    {
        return $this->OpportunityType ?? null;
    }
    /**
     * Set OpportunityType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $opportunityType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setOpportunityType(?string $opportunityType = null): self
    {
        // validation for constraint: string
        if (!is_null($opportunityType) && !is_string($opportunityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opportunityType, true), gettype($opportunityType)), __LINE__);
        }
        if (is_null($opportunityType) || (is_array($opportunityType) && empty($opportunityType))) {
            unset($this->OpportunityType);
        } else {
            $this->OpportunityType = $opportunityType;
        }
        
        return $this;
    }
    /**
     * Get Probability value
     * @return float|null
     */
    public function getProbability(): ?float
    {
        return $this->Probability;
    }
    /**
     * Set Probability value
     * @param float $probability
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setProbability(?float $probability = null): self
    {
        // validation for constraint: float
        if (!is_null($probability) && !(is_float($probability) || is_numeric($probability))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($probability, true), gettype($probability)), __LINE__);
        }
        $this->Probability = $probability;
        
        return $this;
    }
    /**
     * Get Products value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo|null
     */
    public function getProducts(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo
    {
        return $this->Products ?? null;
    }
    /**
     * Set Products value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo $products
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setProducts(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityProductInfo $products = null): self
    {
        if (is_null($products) || (is_array($products) && empty($products))) {
            unset($this->Products);
        } else {
            $this->Products = $products;
        }
        
        return $this;
    }
    /**
     * Get SaleStage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaleStage(): ?string
    {
        return $this->SaleStage ?? null;
    }
    /**
     * Set SaleStage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saleStage
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setSaleStage(?string $saleStage = null): self
    {
        // validation for constraint: string
        if (!is_null($saleStage) && !is_string($saleStage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleStage, true), gettype($saleStage)), __LINE__);
        }
        if (is_null($saleStage) || (is_array($saleStage) && empty($saleStage))) {
            unset($this->SaleStage);
        } else {
            $this->SaleStage = $saleStage;
        }
        
        return $this;
    }
    /**
     * Get SuccessDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSuccessDate(): ?string
    {
        return $this->SuccessDate ?? null;
    }
    /**
     * Set SuccessDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $successDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setSuccessDate(?string $successDate = null): self
    {
        // validation for constraint: string
        if (!is_null($successDate) && !is_string($successDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successDate, true), gettype($successDate)), __LINE__);
        }
        if (is_null($successDate) || (is_array($successDate) && empty($successDate))) {
            unset($this->SuccessDate);
        } else {
            $this->SuccessDate = $successDate;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
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
     * Get WonCause value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWonCause(): ?string
    {
        return $this->WonCause ?? null;
    }
    /**
     * Set WonCause value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wonCause
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
     */
    public function setWonCause(?string $wonCause = null): self
    {
        // validation for constraint: string
        if (!is_null($wonCause) && !is_string($wonCause)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wonCause, true), gettype($wonCause)), __LINE__);
        }
        if (is_null($wonCause) || (is_array($wonCause) && empty($wonCause))) {
            unset($this->WonCause);
        } else {
            $this->WonCause = $wonCause;
        }
        
        return $this;
    }
}
