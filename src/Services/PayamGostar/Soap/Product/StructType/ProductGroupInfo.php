<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductGroupInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductGroupInfo
 * @subpackage Structs
 */
class ProductGroupInfo extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Code = null;
    /**
     * The CountFormulaId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $CountFormulaId = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ParentGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentGroupId = null;
    /**
     * The RefId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RefId = null;
    /**
     * The TafsiliCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TafsiliCode = null;
    /**
     * Constructor method for ProductGroupInfo
     * @uses ProductGroupInfo::setCode()
     * @uses ProductGroupInfo::setCountFormulaId()
     * @uses ProductGroupInfo::setId()
     * @uses ProductGroupInfo::setName()
     * @uses ProductGroupInfo::setParentGroupId()
     * @uses ProductGroupInfo::setRefId()
     * @uses ProductGroupInfo::setTafsiliCode()
     * @param string $code
     * @param int $countFormulaId
     * @param string $id
     * @param string $name
     * @param string $parentGroupId
     * @param string $refId
     * @param string $tafsiliCode
     */
    public function __construct(?string $code = null, ?int $countFormulaId = null, ?string $id = null, ?string $name = null, ?string $parentGroupId = null, ?string $refId = null, ?string $tafsiliCode = null)
    {
        $this
            ->setCode($code)
            ->setCountFormulaId($countFormulaId)
            ->setId($id)
            ->setName($name)
            ->setParentGroupId($parentGroupId)
            ->setRefId($refId)
            ->setTafsiliCode($tafsiliCode);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
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
     * Get CountFormulaId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCountFormulaId(): ?int
    {
        return $this->CountFormulaId ?? null;
    }
    /**
     * Set CountFormulaId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $countFormulaId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
     */
    public function setCountFormulaId(?int $countFormulaId = null): self
    {
        // validation for constraint: int
        if (!is_null($countFormulaId) && !(is_int($countFormulaId) || ctype_digit($countFormulaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countFormulaId, true), gettype($countFormulaId)), __LINE__);
        }
        if (is_null($countFormulaId) || (is_array($countFormulaId) && empty($countFormulaId))) {
            unset($this->CountFormulaId);
        } else {
            $this->CountFormulaId = $countFormulaId;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
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
     * Get ParentGroupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentGroupId(): ?string
    {
        return $this->ParentGroupId ?? null;
    }
    /**
     * Set ParentGroupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentGroupId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
     */
    public function setParentGroupId(?string $parentGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentGroupId) && !is_string($parentGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentGroupId, true), gettype($parentGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentGroupId, true)), __LINE__);
        }
        if (is_null($parentGroupId) || (is_array($parentGroupId) && empty($parentGroupId))) {
            unset($this->ParentGroupId);
        } else {
            $this->ParentGroupId = $parentGroupId;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
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
     * Get TafsiliCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTafsiliCode(): ?string
    {
        return $this->TafsiliCode ?? null;
    }
    /**
     * Set TafsiliCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tafsiliCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductGroupInfo
     */
    public function setTafsiliCode(?string $tafsiliCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tafsiliCode) && !is_string($tafsiliCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tafsiliCode, true), gettype($tafsiliCode)), __LINE__);
        }
        if (is_null($tafsiliCode) || (is_array($tafsiliCode) && empty($tafsiliCode))) {
            unset($this->TafsiliCode);
        } else {
            $this->TafsiliCode = $tafsiliCode;
        }
        
        return $this;
    }
}
