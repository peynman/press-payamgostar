<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductInfo
 * @subpackage Structs
 */
class ProductInfo extends AbstractStructBase
{
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Brand = null;
    /**
     * The BuyAble
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $BuyAble = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Code = null;
    /**
     * The CommisionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CommisionType = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Commission = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GroupId = null;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupName = null;
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
     * The Inventory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Inventory = null;
    /**
     * The IsActiveOrderPoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsActiveOrderPoint = null;
    /**
     * The IsCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsCommission = null;
    /**
     * The IsService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsService = null;
    /**
     * The MadeIn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MadeIn = null;
    /**
     * The MinimumAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $MinimumAmount = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The PriceListInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo $PriceListInfo = null;
    /**
     * The ProductUnitType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductUnitType = null;
    /**
     * The RefId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RefId = null;
    /**
     * The Sellable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Sellable = null;
    /**
     * The Taxable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Taxable = null;
    /**
     * The TechInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TechInfo = null;
    /**
     * The Tollable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Tollable = null;
    /**
     * The UnitBuyPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $UnitBuyPrice = null;
    /**
     * The UnitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $UnitPrice = null;
    /**
     * Constructor method for ProductInfo
     * @uses ProductInfo::setBrand()
     * @uses ProductInfo::setBuyAble()
     * @uses ProductInfo::setCode()
     * @uses ProductInfo::setCommisionType()
     * @uses ProductInfo::setCommission()
     * @uses ProductInfo::setDescription()
     * @uses ProductInfo::setGroupId()
     * @uses ProductInfo::setGroupName()
     * @uses ProductInfo::setId()
     * @uses ProductInfo::setInventory()
     * @uses ProductInfo::setIsActiveOrderPoint()
     * @uses ProductInfo::setIsCommission()
     * @uses ProductInfo::setIsService()
     * @uses ProductInfo::setMadeIn()
     * @uses ProductInfo::setMinimumAmount()
     * @uses ProductInfo::setName()
     * @uses ProductInfo::setPriceListInfo()
     * @uses ProductInfo::setProductUnitType()
     * @uses ProductInfo::setRefId()
     * @uses ProductInfo::setSellable()
     * @uses ProductInfo::setTaxable()
     * @uses ProductInfo::setTechInfo()
     * @uses ProductInfo::setTollable()
     * @uses ProductInfo::setUnitBuyPrice()
     * @uses ProductInfo::setUnitPrice()
     * @param string $brand
     * @param bool $buyAble
     * @param string $code
     * @param string $commisionType
     * @param float $commission
     * @param string $description
     * @param string $groupId
     * @param string $groupName
     * @param string $id
     * @param bool $inventory
     * @param bool $isActiveOrderPoint
     * @param bool $isCommission
     * @param bool $isService
     * @param string $madeIn
     * @param float $minimumAmount
     * @param string $name
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo $priceListInfo
     * @param string $productUnitType
     * @param string $refId
     * @param bool $sellable
     * @param bool $taxable
     * @param string $techInfo
     * @param bool $tollable
     * @param float $unitBuyPrice
     * @param float $unitPrice
     */
    public function __construct(?string $brand = null, ?bool $buyAble = null, ?string $code = null, ?string $commisionType = null, ?float $commission = null, ?string $description = null, ?string $groupId = null, ?string $groupName = null, ?string $id = null, ?bool $inventory = null, ?bool $isActiveOrderPoint = null, ?bool $isCommission = null, ?bool $isService = null, ?string $madeIn = null, ?float $minimumAmount = null, ?string $name = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo $priceListInfo = null, ?string $productUnitType = null, ?string $refId = null, ?bool $sellable = null, ?bool $taxable = null, ?string $techInfo = null, ?bool $tollable = null, ?float $unitBuyPrice = null, ?float $unitPrice = null)
    {
        $this
            ->setBrand($brand)
            ->setBuyAble($buyAble)
            ->setCode($code)
            ->setCommisionType($commisionType)
            ->setCommission($commission)
            ->setDescription($description)
            ->setGroupId($groupId)
            ->setGroupName($groupName)
            ->setId($id)
            ->setInventory($inventory)
            ->setIsActiveOrderPoint($isActiveOrderPoint)
            ->setIsCommission($isCommission)
            ->setIsService($isService)
            ->setMadeIn($madeIn)
            ->setMinimumAmount($minimumAmount)
            ->setName($name)
            ->setPriceListInfo($priceListInfo)
            ->setProductUnitType($productUnitType)
            ->setRefId($refId)
            ->setSellable($sellable)
            ->setTaxable($taxable)
            ->setTechInfo($techInfo)
            ->setTollable($tollable)
            ->setUnitBuyPrice($unitBuyPrice)
            ->setUnitPrice($unitPrice);
    }
    /**
     * Get Brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->Brand ?? null;
    }
    /**
     * Set Brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brand
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setBrand(?string $brand = null): self
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), gettype($brand)), __LINE__);
        }
        if (is_null($brand) || (is_array($brand) && empty($brand))) {
            unset($this->Brand);
        } else {
            $this->Brand = $brand;
        }
        
        return $this;
    }
    /**
     * Get BuyAble value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getBuyAble(): ?bool
    {
        return $this->BuyAble ?? null;
    }
    /**
     * Set BuyAble value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $buyAble
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setBuyAble(?bool $buyAble = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyAble) && !is_bool($buyAble)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyAble, true), gettype($buyAble)), __LINE__);
        }
        if (is_null($buyAble) || (is_array($buyAble) && empty($buyAble))) {
            unset($this->BuyAble);
        } else {
            $this->BuyAble = $buyAble;
        }
        
        return $this;
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code ?? null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        
        return $this;
    }
    /**
     * Get CommisionType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommisionType(): ?string
    {
        return $this->CommisionType ?? null;
    }
    /**
     * Set CommisionType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commisionType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setCommisionType(?string $commisionType = null): self
    {
        // validation for constraint: string
        if (!is_null($commisionType) && !is_string($commisionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commisionType, true), gettype($commisionType)), __LINE__);
        }
        if (is_null($commisionType) || (is_array($commisionType) && empty($commisionType))) {
            unset($this->CommisionType);
        } else {
            $this->CommisionType = $commisionType;
        }
        
        return $this;
    }
    /**
     * Get Commission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->Commission ?? null;
    }
    /**
     * Set Commission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $commission
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setCommission(?float $commission = null): self
    {
        // validation for constraint: float
        if (!is_null($commission) && !(is_float($commission) || is_numeric($commission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        if (is_null($commission) || (is_array($commission) && empty($commission))) {
            unset($this->Commission);
        } else {
            $this->Commission = $commission;
        }
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get GroupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->GroupId ?? null;
    }
    /**
     * Set GroupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupId, true)), __LINE__);
        }
        if (is_null($groupId) || (is_array($groupId) && empty($groupId))) {
            unset($this->GroupId);
        } else {
            $this->GroupId = $groupId;
        }
        
        return $this;
    }
    /**
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->GroupName ?? null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id ?? null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
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
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        
        return $this;
    }
    /**
     * Get Inventory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getInventory(): ?bool
    {
        return $this->Inventory ?? null;
    }
    /**
     * Set Inventory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $inventory
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setInventory(?bool $inventory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inventory) && !is_bool($inventory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inventory, true), gettype($inventory)), __LINE__);
        }
        if (is_null($inventory) || (is_array($inventory) && empty($inventory))) {
            unset($this->Inventory);
        } else {
            $this->Inventory = $inventory;
        }
        
        return $this;
    }
    /**
     * Get IsActiveOrderPoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsActiveOrderPoint(): ?bool
    {
        return $this->IsActiveOrderPoint ?? null;
    }
    /**
     * Set IsActiveOrderPoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isActiveOrderPoint
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setIsActiveOrderPoint(?bool $isActiveOrderPoint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActiveOrderPoint) && !is_bool($isActiveOrderPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActiveOrderPoint, true), gettype($isActiveOrderPoint)), __LINE__);
        }
        if (is_null($isActiveOrderPoint) || (is_array($isActiveOrderPoint) && empty($isActiveOrderPoint))) {
            unset($this->IsActiveOrderPoint);
        } else {
            $this->IsActiveOrderPoint = $isActiveOrderPoint;
        }
        
        return $this;
    }
    /**
     * Get IsCommission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsCommission(): ?bool
    {
        return $this->IsCommission ?? null;
    }
    /**
     * Set IsCommission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isCommission
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setIsCommission(?bool $isCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCommission) && !is_bool($isCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCommission, true), gettype($isCommission)), __LINE__);
        }
        if (is_null($isCommission) || (is_array($isCommission) && empty($isCommission))) {
            unset($this->IsCommission);
        } else {
            $this->IsCommission = $isCommission;
        }
        
        return $this;
    }
    /**
     * Get IsService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsService(): ?bool
    {
        return $this->IsService ?? null;
    }
    /**
     * Set IsService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isService
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setIsService(?bool $isService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isService) && !is_bool($isService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isService, true), gettype($isService)), __LINE__);
        }
        if (is_null($isService) || (is_array($isService) && empty($isService))) {
            unset($this->IsService);
        } else {
            $this->IsService = $isService;
        }
        
        return $this;
    }
    /**
     * Get MadeIn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMadeIn(): ?string
    {
        return $this->MadeIn ?? null;
    }
    /**
     * Set MadeIn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $madeIn
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setMadeIn(?string $madeIn = null): self
    {
        // validation for constraint: string
        if (!is_null($madeIn) && !is_string($madeIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($madeIn, true), gettype($madeIn)), __LINE__);
        }
        if (is_null($madeIn) || (is_array($madeIn) && empty($madeIn))) {
            unset($this->MadeIn);
        } else {
            $this->MadeIn = $madeIn;
        }
        
        return $this;
    }
    /**
     * Get MinimumAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMinimumAmount(): ?float
    {
        return $this->MinimumAmount ?? null;
    }
    /**
     * Set MinimumAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $minimumAmount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setMinimumAmount(?float $minimumAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($minimumAmount) && !(is_float($minimumAmount) || is_numeric($minimumAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimumAmount, true), gettype($minimumAmount)), __LINE__);
        }
        if (is_null($minimumAmount) || (is_array($minimumAmount) && empty($minimumAmount))) {
            unset($this->MinimumAmount);
        } else {
            $this->MinimumAmount = $minimumAmount;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get PriceListInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo|null
     */
    public function getPriceListInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo
    {
        return $this->PriceListInfo ?? null;
    }
    /**
     * Set PriceListInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo $priceListInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setPriceListInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\ArrayType\ArrayOfPriceListInfo $priceListInfo = null): self
    {
        if (is_null($priceListInfo) || (is_array($priceListInfo) && empty($priceListInfo))) {
            unset($this->PriceListInfo);
        } else {
            $this->PriceListInfo = $priceListInfo;
        }
        
        return $this;
    }
    /**
     * Get ProductUnitType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductUnitType(): ?string
    {
        return $this->ProductUnitType ?? null;
    }
    /**
     * Set ProductUnitType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productUnitType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setProductUnitType(?string $productUnitType = null): self
    {
        // validation for constraint: string
        if (!is_null($productUnitType) && !is_string($productUnitType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productUnitType, true), gettype($productUnitType)), __LINE__);
        }
        if (is_null($productUnitType) || (is_array($productUnitType) && empty($productUnitType))) {
            unset($this->ProductUnitType);
        } else {
            $this->ProductUnitType = $productUnitType;
        }
        
        return $this;
    }
    /**
     * Get RefId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefId(): ?string
    {
        return $this->RefId ?? null;
    }
    /**
     * Set RefId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setRefId(?string $refId = null): self
    {
        // validation for constraint: string
        if (!is_null($refId) && !is_string($refId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        if (is_null($refId) || (is_array($refId) && empty($refId))) {
            unset($this->RefId);
        } else {
            $this->RefId = $refId;
        }
        
        return $this;
    }
    /**
     * Get Sellable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSellable(): ?bool
    {
        return $this->Sellable ?? null;
    }
    /**
     * Set Sellable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $sellable
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setSellable(?bool $sellable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellable) && !is_bool($sellable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellable, true), gettype($sellable)), __LINE__);
        }
        if (is_null($sellable) || (is_array($sellable) && empty($sellable))) {
            unset($this->Sellable);
        } else {
            $this->Sellable = $sellable;
        }
        
        return $this;
    }
    /**
     * Get Taxable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getTaxable(): ?bool
    {
        return $this->Taxable ?? null;
    }
    /**
     * Set Taxable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $taxable
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setTaxable(?bool $taxable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($taxable) && !is_bool($taxable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($taxable, true), gettype($taxable)), __LINE__);
        }
        if (is_null($taxable) || (is_array($taxable) && empty($taxable))) {
            unset($this->Taxable);
        } else {
            $this->Taxable = $taxable;
        }
        
        return $this;
    }
    /**
     * Get TechInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTechInfo(): ?string
    {
        return $this->TechInfo ?? null;
    }
    /**
     * Set TechInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $techInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setTechInfo(?string $techInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($techInfo) && !is_string($techInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($techInfo, true), gettype($techInfo)), __LINE__);
        }
        if (is_null($techInfo) || (is_array($techInfo) && empty($techInfo))) {
            unset($this->TechInfo);
        } else {
            $this->TechInfo = $techInfo;
        }
        
        return $this;
    }
    /**
     * Get Tollable value
     * @return bool|null
     */
    public function getTollable(): ?bool
    {
        return $this->Tollable;
    }
    /**
     * Set Tollable value
     * @param bool $tollable
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setTollable(?bool $tollable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tollable) && !is_bool($tollable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tollable, true), gettype($tollable)), __LINE__);
        }
        $this->Tollable = $tollable;
        
        return $this;
    }
    /**
     * Get UnitBuyPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getUnitBuyPrice(): ?float
    {
        return $this->UnitBuyPrice ?? null;
    }
    /**
     * Set UnitBuyPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $unitBuyPrice
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setUnitBuyPrice(?float $unitBuyPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitBuyPrice) && !(is_float($unitBuyPrice) || is_numeric($unitBuyPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitBuyPrice, true), gettype($unitBuyPrice)), __LINE__);
        }
        if (is_null($unitBuyPrice) || (is_array($unitBuyPrice) && empty($unitBuyPrice))) {
            unset($this->UnitBuyPrice);
        } else {
            $this->UnitBuyPrice = $unitBuyPrice;
        }
        
        return $this;
    }
    /**
     * Get UnitPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->UnitPrice ?? null;
    }
    /**
     * Set UnitPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $unitPrice
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductInfo
     */
    public function setUnitPrice(?float $unitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        if (is_null($unitPrice) || (is_array($unitPrice) && empty($unitPrice))) {
            unset($this->UnitPrice);
        } else {
            $this->UnitPrice = $unitPrice;
        }
        
        return $this;
    }
}
