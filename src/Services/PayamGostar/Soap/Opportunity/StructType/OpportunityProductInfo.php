<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpportunityProductInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OpportunityProductInfo
 * @subpackage Structs
 */
class OpportunityProductInfo extends AbstractStructBase
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
     * @var float|null
     */
    protected ?float $DiscountPercent = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Index
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Index = null;
    /**
     * The OppId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OppId = null;
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
     * Constructor method for OpportunityProductInfo
     * @uses OpportunityProductInfo::setBaseUnitPrice()
     * @uses OpportunityProductInfo::setCount()
     * @uses OpportunityProductInfo::setDetailDescription()
     * @uses OpportunityProductInfo::setDiscount()
     * @uses OpportunityProductInfo::setDiscountPercent()
     * @uses OpportunityProductInfo::setId()
     * @uses OpportunityProductInfo::setIndex()
     * @uses OpportunityProductInfo::setOppId()
     * @uses OpportunityProductInfo::setProductCode()
     * @uses OpportunityProductInfo::setProductId()
     * @uses OpportunityProductInfo::setProductName()
     * @uses OpportunityProductInfo::setProductUnitTypeName()
     * @param float $baseUnitPrice
     * @param float $count
     * @param string $detailDescription
     * @param float $discount
     * @param float $discountPercent
     * @param string $id
     * @param int $index
     * @param string $oppId
     * @param string $productCode
     * @param string $productId
     * @param string $productName
     * @param string $productUnitTypeName
     */
    public function __construct(?float $baseUnitPrice = null, ?float $count = null, ?string $detailDescription = null, ?float $discount = null, ?float $discountPercent = null, ?string $id = null, ?int $index = null, ?string $oppId = null, ?string $productCode = null, ?string $productId = null, ?string $productName = null, ?string $productUnitTypeName = null)
    {
        $this
            ->setBaseUnitPrice($baseUnitPrice)
            ->setCount($count)
            ->setDetailDescription($detailDescription)
            ->setDiscount($discount)
            ->setDiscountPercent($discountPercent)
            ->setId($id)
            ->setIndex($index)
            ->setOppId($oppId)
            ->setProductCode($productCode)
            ->setProductId($productId)
            ->setProductName($productName)
            ->setProductUnitTypeName($productUnitTypeName);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return float|null
     */
    public function getDiscountPercent(): ?float
    {
        return $this->DiscountPercent;
    }
    /**
     * Set DiscountPercent value
     * @param float $discountPercent
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
     */
    public function setDiscountPercent(?float $discountPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($discountPercent) && !(is_float($discountPercent) || is_numeric($discountPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountPercent, true), gettype($discountPercent)), __LINE__);
        }
        $this->DiscountPercent = $discountPercent;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Index value
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
     */
    public function setIndex(?int $index = null): self
    {
        // validation for constraint: int
        if (!is_null($index) && !(is_int($index) || ctype_digit($index))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($index, true), gettype($index)), __LINE__);
        }
        $this->Index = $index;
        
        return $this;
    }
    /**
     * Get OppId value
     * @return string|null
     */
    public function getOppId(): ?string
    {
        return $this->OppId;
    }
    /**
     * Set OppId value
     * @param string $oppId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
     */
    public function setOppId(?string $oppId = null): self
    {
        // validation for constraint: string
        if (!is_null($oppId) && !is_string($oppId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oppId, true), gettype($oppId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($oppId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $oppId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($oppId, true)), __LINE__);
        }
        $this->OppId = $oppId;
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->ProductId;
    }
    /**
     * Set ProductId value
     * @param string $productId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityProductInfo
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
}
