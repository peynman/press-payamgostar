<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCrmObjectInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseCrmObjectInfo
 * @subpackage Structs
 */
class BaseCrmObjectInfo extends AbstractStructBase
{
    /**
     * The CreatDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatDate = null;
    /**
     * The CrmId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CrmId = null;
    /**
     * The CrmObjectTypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CrmObjectTypeCode = null;
    /**
     * The CrmObjectTypeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CrmObjectTypeId = null;
    /**
     * The CrmObjectTypeIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CrmObjectTypeIndex = null;
    /**
     * The CrmObjectTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CrmObjectTypeName = null;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo $ExtendedProperties = null;
    /**
     * The ModifyDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModifyDate = null;
    /**
     * The ParentCrmObjectId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentCrmObjectId = null;
    /**
     * The ProcessStateIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $ProcessStateIndex = null;
    /**
     * The RefId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RefId = null;
    /**
     * The Stage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Stage = null;
    /**
     * The StageId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $StageId = null;
    /**
     * The Tags
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring $Tags = null;
    /**
     * Constructor method for BaseCrmObjectInfo
     * @uses BaseCrmObjectInfo::setCreatDate()
     * @uses BaseCrmObjectInfo::setCrmId()
     * @uses BaseCrmObjectInfo::setCrmObjectTypeCode()
     * @uses BaseCrmObjectInfo::setCrmObjectTypeId()
     * @uses BaseCrmObjectInfo::setCrmObjectTypeIndex()
     * @uses BaseCrmObjectInfo::setCrmObjectTypeName()
     * @uses BaseCrmObjectInfo::setExtendedProperties()
     * @uses BaseCrmObjectInfo::setModifyDate()
     * @uses BaseCrmObjectInfo::setParentCrmObjectId()
     * @uses BaseCrmObjectInfo::setProcessStateIndex()
     * @uses BaseCrmObjectInfo::setRefId()
     * @uses BaseCrmObjectInfo::setStage()
     * @uses BaseCrmObjectInfo::setStageId()
     * @uses BaseCrmObjectInfo::setTags()
     * @param string $creatDate
     * @param string $crmId
     * @param string $crmObjectTypeCode
     * @param string $crmObjectTypeId
     * @param int $crmObjectTypeIndex
     * @param string $crmObjectTypeName
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo $extendedProperties
     * @param string $modifyDate
     * @param string $parentCrmObjectId
     * @param int $processStateIndex
     * @param string $refId
     * @param string $stage
     * @param string $stageId
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring $tags
     */
    public function __construct(?string $creatDate = null, ?string $crmId = null, ?string $crmObjectTypeCode = null, ?string $crmObjectTypeId = null, ?int $crmObjectTypeIndex = null, ?string $crmObjectTypeName = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo $extendedProperties = null, ?string $modifyDate = null, ?string $parentCrmObjectId = null, ?int $processStateIndex = null, ?string $refId = null, ?string $stage = null, ?string $stageId = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring $tags = null)
    {
        $this
            ->setCreatDate($creatDate)
            ->setCrmId($crmId)
            ->setCrmObjectTypeCode($crmObjectTypeCode)
            ->setCrmObjectTypeId($crmObjectTypeId)
            ->setCrmObjectTypeIndex($crmObjectTypeIndex)
            ->setCrmObjectTypeName($crmObjectTypeName)
            ->setExtendedProperties($extendedProperties)
            ->setModifyDate($modifyDate)
            ->setParentCrmObjectId($parentCrmObjectId)
            ->setProcessStateIndex($processStateIndex)
            ->setRefId($refId)
            ->setStage($stage)
            ->setStageId($stageId)
            ->setTags($tags);
    }
    /**
     * Get CreatDate value
     * @return string|null
     */
    public function getCreatDate(): ?string
    {
        return $this->CreatDate;
    }
    /**
     * Set CreatDate value
     * @param string $creatDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setCreatDate(?string $creatDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creatDate) && !is_string($creatDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creatDate, true), gettype($creatDate)), __LINE__);
        }
        $this->CreatDate = $creatDate;
        
        return $this;
    }
    /**
     * Get CrmId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCrmId(): ?string
    {
        return $this->CrmId ?? null;
    }
    /**
     * Set CrmId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $crmId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setCrmId(?string $crmId = null): self
    {
        // validation for constraint: string
        if (!is_null($crmId) && !is_string($crmId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmId, true), gettype($crmId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($crmId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $crmId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($crmId, true)), __LINE__);
        }
        if (is_null($crmId) || (is_array($crmId) && empty($crmId))) {
            unset($this->CrmId);
        } else {
            $this->CrmId = $crmId;
        }
        
        return $this;
    }
    /**
     * Get CrmObjectTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCrmObjectTypeCode(): ?string
    {
        return $this->CrmObjectTypeCode ?? null;
    }
    /**
     * Set CrmObjectTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $crmObjectTypeCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setCrmObjectTypeCode(?string $crmObjectTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($crmObjectTypeCode) && !is_string($crmObjectTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmObjectTypeCode, true), gettype($crmObjectTypeCode)), __LINE__);
        }
        if (is_null($crmObjectTypeCode) || (is_array($crmObjectTypeCode) && empty($crmObjectTypeCode))) {
            unset($this->CrmObjectTypeCode);
        } else {
            $this->CrmObjectTypeCode = $crmObjectTypeCode;
        }
        
        return $this;
    }
    /**
     * Get CrmObjectTypeId value
     * @return string|null
     */
    public function getCrmObjectTypeId(): ?string
    {
        return $this->CrmObjectTypeId;
    }
    /**
     * Set CrmObjectTypeId value
     * @param string $crmObjectTypeId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setCrmObjectTypeId(?string $crmObjectTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($crmObjectTypeId) && !is_string($crmObjectTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmObjectTypeId, true), gettype($crmObjectTypeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($crmObjectTypeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $crmObjectTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($crmObjectTypeId, true)), __LINE__);
        }
        $this->CrmObjectTypeId = $crmObjectTypeId;
        
        return $this;
    }
    /**
     * Get CrmObjectTypeIndex value
     * @return int|null
     */
    public function getCrmObjectTypeIndex(): ?int
    {
        return $this->CrmObjectTypeIndex;
    }
    /**
     * Set CrmObjectTypeIndex value
     * @param int $crmObjectTypeIndex
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setCrmObjectTypeIndex(?int $crmObjectTypeIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($crmObjectTypeIndex) && !(is_int($crmObjectTypeIndex) || ctype_digit($crmObjectTypeIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crmObjectTypeIndex, true), gettype($crmObjectTypeIndex)), __LINE__);
        }
        $this->CrmObjectTypeIndex = $crmObjectTypeIndex;
        
        return $this;
    }
    /**
     * Get CrmObjectTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCrmObjectTypeName(): ?string
    {
        return $this->CrmObjectTypeName ?? null;
    }
    /**
     * Set CrmObjectTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $crmObjectTypeName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setCrmObjectTypeName(?string $crmObjectTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($crmObjectTypeName) && !is_string($crmObjectTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmObjectTypeName, true), gettype($crmObjectTypeName)), __LINE__);
        }
        if (is_null($crmObjectTypeName) || (is_array($crmObjectTypeName) && empty($crmObjectTypeName))) {
            unset($this->CrmObjectTypeName);
        } else {
            $this->CrmObjectTypeName = $crmObjectTypeName;
        }
        
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo|null
     */
    public function getExtendedProperties(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo
    {
        return $this->ExtendedProperties ?? null;
    }
    /**
     * Set ExtendedProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo $extendedProperties
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setExtendedProperties(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfBaseCrmObjectExtendedPropertyInfo $extendedProperties = null): self
    {
        if (is_null($extendedProperties) || (is_array($extendedProperties) && empty($extendedProperties))) {
            unset($this->ExtendedProperties);
        } else {
            $this->ExtendedProperties = $extendedProperties;
        }
        
        return $this;
    }
    /**
     * Get ModifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->ModifyDate;
    }
    /**
     * Set ModifyDate value
     * @param string $modifyDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->ModifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get ParentCrmObjectId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentCrmObjectId(): ?string
    {
        return $this->ParentCrmObjectId ?? null;
    }
    /**
     * Set ParentCrmObjectId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentCrmObjectId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setParentCrmObjectId(?string $parentCrmObjectId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentCrmObjectId) && !is_string($parentCrmObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentCrmObjectId, true), gettype($parentCrmObjectId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentCrmObjectId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentCrmObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentCrmObjectId, true)), __LINE__);
        }
        if (is_null($parentCrmObjectId) || (is_array($parentCrmObjectId) && empty($parentCrmObjectId))) {
            unset($this->ParentCrmObjectId);
        } else {
            $this->ParentCrmObjectId = $parentCrmObjectId;
        }
        
        return $this;
    }
    /**
     * Get ProcessStateIndex value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getProcessStateIndex(): ?int
    {
        return $this->ProcessStateIndex ?? null;
    }
    /**
     * Set ProcessStateIndex value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $processStateIndex
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setProcessStateIndex(?int $processStateIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($processStateIndex) && !(is_int($processStateIndex) || ctype_digit($processStateIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($processStateIndex, true), gettype($processStateIndex)), __LINE__);
        }
        if (is_null($processStateIndex) || (is_array($processStateIndex) && empty($processStateIndex))) {
            unset($this->ProcessStateIndex);
        } else {
            $this->ProcessStateIndex = $processStateIndex;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
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
     * Get Stage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->Stage ?? null;
    }
    /**
     * Set Stage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stage
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setStage(?string $stage = null): self
    {
        // validation for constraint: string
        if (!is_null($stage) && !is_string($stage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stage, true), gettype($stage)), __LINE__);
        }
        if (is_null($stage) || (is_array($stage) && empty($stage))) {
            unset($this->Stage);
        } else {
            $this->Stage = $stage;
        }
        
        return $this;
    }
    /**
     * Get StageId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStageId(): ?string
    {
        return $this->StageId ?? null;
    }
    /**
     * Set StageId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stageId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setStageId(?string $stageId = null): self
    {
        // validation for constraint: string
        if (!is_null($stageId) && !is_string($stageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stageId, true), gettype($stageId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($stageId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $stageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($stageId, true)), __LINE__);
        }
        if (is_null($stageId) || (is_array($stageId) && empty($stageId))) {
            unset($this->StageId);
        } else {
            $this->StageId = $stageId;
        }
        
        return $this;
    }
    /**
     * Get Tags value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring|null
     */
    public function getTags(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring
    {
        return $this->Tags ?? null;
    }
    /**
     * Set Tags value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring $tags
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\BaseCrmObjectInfo
     */
    public function setTags(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\ArrayType\ArrayOfstring $tags = null): self
    {
        if (is_null($tags) || (is_array($tags) && empty($tags))) {
            unset($this->Tags);
        } else {
            $this->Tags = $tags;
        }
        
        return $this;
    }
}
