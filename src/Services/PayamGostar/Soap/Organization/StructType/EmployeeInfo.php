<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeInfo
 * @subpackage Structs
 */
class EmployeeInfo extends AbstractStructBase
{
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Department = null;
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
     * The IsDeleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDeleted = null;
    /**
     * The JobType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $JobType = null;
    /**
     * The Office
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Office = null;
    /**
     * The OrganizationId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OrganizationId = null;
    /**
     * The PersonId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $PersonId = null;
    /**
     * The Profession
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Profession = null;
    /**
     * Constructor method for EmployeeInfo
     * @uses EmployeeInfo::setDepartment()
     * @uses EmployeeInfo::setId()
     * @uses EmployeeInfo::setIsDeleted()
     * @uses EmployeeInfo::setJobType()
     * @uses EmployeeInfo::setOffice()
     * @uses EmployeeInfo::setOrganizationId()
     * @uses EmployeeInfo::setPersonId()
     * @uses EmployeeInfo::setProfession()
     * @param string $department
     * @param string $id
     * @param bool $isDeleted
     * @param string $jobType
     * @param string $office
     * @param string $organizationId
     * @param string $personId
     * @param string $profession
     */
    public function __construct(?string $department = null, ?string $id = null, ?bool $isDeleted = null, ?string $jobType = null, ?string $office = null, ?string $organizationId = null, ?string $personId = null, ?string $profession = null)
    {
        $this
            ->setDepartment($department)
            ->setId($id)
            ->setIsDeleted($isDeleted)
            ->setJobType($jobType)
            ->setOffice($office)
            ->setOrganizationId($organizationId)
            ->setPersonId($personId)
            ->setProfession($profession);
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->Department ?? null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $department
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
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
     * Get IsDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->IsDeleted;
    }
    /**
     * Set IsDeleted value
     * @param bool $isDeleted
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->IsDeleted = $isDeleted;
        
        return $this;
    }
    /**
     * Get JobType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getJobType(): ?string
    {
        return $this->JobType ?? null;
    }
    /**
     * Set JobType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $jobType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setJobType(?string $jobType = null): self
    {
        // validation for constraint: string
        if (!is_null($jobType) && !is_string($jobType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobType, true), gettype($jobType)), __LINE__);
        }
        if (is_null($jobType) || (is_array($jobType) && empty($jobType))) {
            unset($this->JobType);
        } else {
            $this->JobType = $jobType;
        }
        
        return $this;
    }
    /**
     * Get Office value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOffice(): ?string
    {
        return $this->Office ?? null;
    }
    /**
     * Set Office value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $office
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setOffice(?string $office = null): self
    {
        // validation for constraint: string
        if (!is_null($office) && !is_string($office)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($office, true), gettype($office)), __LINE__);
        }
        if (is_null($office) || (is_array($office) && empty($office))) {
            unset($this->Office);
        } else {
            $this->Office = $office;
        }
        
        return $this;
    }
    /**
     * Get OrganizationId value
     * @return string|null
     */
    public function getOrganizationId(): ?string
    {
        return $this->OrganizationId;
    }
    /**
     * Set OrganizationId value
     * @param string $organizationId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setOrganizationId(?string $organizationId = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationId) && !is_string($organizationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationId, true), gettype($organizationId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($organizationId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $organizationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($organizationId, true)), __LINE__);
        }
        $this->OrganizationId = $organizationId;
        
        return $this;
    }
    /**
     * Get PersonId value
     * @return string|null
     */
    public function getPersonId(): ?string
    {
        return $this->PersonId;
    }
    /**
     * Set PersonId value
     * @param string $personId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setPersonId(?string $personId = null): self
    {
        // validation for constraint: string
        if (!is_null($personId) && !is_string($personId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($personId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $personId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($personId, true)), __LINE__);
        }
        $this->PersonId = $personId;
        
        return $this;
    }
    /**
     * Get Profession value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProfession(): ?string
    {
        return $this->Profession ?? null;
    }
    /**
     * Set Profession value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $profession
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\EmployeeInfo
     */
    public function setProfession(?string $profession = null): self
    {
        // validation for constraint: string
        if (!is_null($profession) && !is_string($profession)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profession, true), gettype($profession)), __LINE__);
        }
        if (is_null($profession) || (is_array($profession) && empty($profession))) {
            unset($this->Profession);
        } else {
            $this->Profession = $profession;
        }
        
        return $this;
    }
}
