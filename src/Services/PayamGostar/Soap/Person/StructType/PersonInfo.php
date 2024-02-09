<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PersonInfo
 * @subpackage Structs
 */
class PersonInfo extends IdentityInfo
{
    /**
     * The AreasOfInterest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AreasOfInterest = null;
    /**
     * The BirthDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BirthDate = null;
    /**
     * The Children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Children = null;
    /**
     * The CreditType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CreditType = null;
    /**
     * The Degree
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Degree = null;
    /**
     * The Employees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $Employees = null;
    /**
     * The FacebookUsername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FacebookUsername = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The Hobbies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Hobbies = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The MannerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MannerType = null;
    /**
     * The NationalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NationalCode = null;
    /**
     * The PaymentStatusType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PaymentStatusType = null;
    /**
     * The PersonPrefix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PersonPrefix = null;
    /**
     * The PrefferedContactType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PrefferedContactType = null;
    /**
     * The Spouse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Spouse = null;
    /**
     * Constructor method for PersonInfo
     * @uses PersonInfo::setAreasOfInterest()
     * @uses PersonInfo::setBirthDate()
     * @uses PersonInfo::setChildren()
     * @uses PersonInfo::setCreditType()
     * @uses PersonInfo::setDegree()
     * @uses PersonInfo::setEmployees()
     * @uses PersonInfo::setFacebookUsername()
     * @uses PersonInfo::setFirstName()
     * @uses PersonInfo::setGender()
     * @uses PersonInfo::setHobbies()
     * @uses PersonInfo::setLastName()
     * @uses PersonInfo::setMannerType()
     * @uses PersonInfo::setNationalCode()
     * @uses PersonInfo::setPaymentStatusType()
     * @uses PersonInfo::setPersonPrefix()
     * @uses PersonInfo::setPrefferedContactType()
     * @uses PersonInfo::setSpouse()
     * @param string $areasOfInterest
     * @param string $birthDate
     * @param string $children
     * @param string $creditType
     * @param string $degree
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $employees
     * @param string $facebookUsername
     * @param string $firstName
     * @param string $gender
     * @param string $hobbies
     * @param string $lastName
     * @param string $mannerType
     * @param string $nationalCode
     * @param string $paymentStatusType
     * @param string $personPrefix
     * @param string $prefferedContactType
     * @param string $spouse
     */
    public function __construct(?string $areasOfInterest = null, ?string $birthDate = null, ?string $children = null, ?string $creditType = null, ?string $degree = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $employees = null, ?string $facebookUsername = null, ?string $firstName = null, ?string $gender = null, ?string $hobbies = null, ?string $lastName = null, ?string $mannerType = null, ?string $nationalCode = null, ?string $paymentStatusType = null, ?string $personPrefix = null, ?string $prefferedContactType = null, ?string $spouse = null)
    {
        $this
            ->setAreasOfInterest($areasOfInterest)
            ->setBirthDate($birthDate)
            ->setChildren($children)
            ->setCreditType($creditType)
            ->setDegree($degree)
            ->setEmployees($employees)
            ->setFacebookUsername($facebookUsername)
            ->setFirstName($firstName)
            ->setGender($gender)
            ->setHobbies($hobbies)
            ->setLastName($lastName)
            ->setMannerType($mannerType)
            ->setNationalCode($nationalCode)
            ->setPaymentStatusType($paymentStatusType)
            ->setPersonPrefix($personPrefix)
            ->setPrefferedContactType($prefferedContactType)
            ->setSpouse($spouse);
    }
    /**
     * Get AreasOfInterest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAreasOfInterest(): ?string
    {
        return $this->AreasOfInterest ?? null;
    }
    /**
     * Set AreasOfInterest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $areasOfInterest
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setAreasOfInterest(?string $areasOfInterest = null): self
    {
        // validation for constraint: string
        if (!is_null($areasOfInterest) && !is_string($areasOfInterest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areasOfInterest, true), gettype($areasOfInterest)), __LINE__);
        }
        if (is_null($areasOfInterest) || (is_array($areasOfInterest) && empty($areasOfInterest))) {
            unset($this->AreasOfInterest);
        } else {
            $this->AreasOfInterest = $areasOfInterest;
        }
        
        return $this;
    }
    /**
     * Get BirthDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->BirthDate ?? null;
    }
    /**
     * Set BirthDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $birthDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setBirthDate(?string $birthDate = null): self
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDate, true), gettype($birthDate)), __LINE__);
        }
        if (is_null($birthDate) || (is_array($birthDate) && empty($birthDate))) {
            unset($this->BirthDate);
        } else {
            $this->BirthDate = $birthDate;
        }
        
        return $this;
    }
    /**
     * Get Children value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChildren(): ?string
    {
        return $this->Children ?? null;
    }
    /**
     * Set Children value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $children
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setChildren(?string $children = null): self
    {
        // validation for constraint: string
        if (!is_null($children) && !is_string($children)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($children, true), gettype($children)), __LINE__);
        }
        if (is_null($children) || (is_array($children) && empty($children))) {
            unset($this->Children);
        } else {
            $this->Children = $children;
        }
        
        return $this;
    }
    /**
     * Get CreditType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditType(): ?string
    {
        return $this->CreditType ?? null;
    }
    /**
     * Set CreditType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setCreditType(?string $creditType = null): self
    {
        // validation for constraint: string
        if (!is_null($creditType) && !is_string($creditType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditType, true), gettype($creditType)), __LINE__);
        }
        if (is_null($creditType) || (is_array($creditType) && empty($creditType))) {
            unset($this->CreditType);
        } else {
            $this->CreditType = $creditType;
        }
        
        return $this;
    }
    /**
     * Get Degree value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDegree(): ?string
    {
        return $this->Degree ?? null;
    }
    /**
     * Set Degree value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $degree
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setDegree(?string $degree = null): self
    {
        // validation for constraint: string
        if (!is_null($degree) && !is_string($degree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($degree, true), gettype($degree)), __LINE__);
        }
        if (is_null($degree) || (is_array($degree) && empty($degree))) {
            unset($this->Degree);
        } else {
            $this->Degree = $degree;
        }
        
        return $this;
    }
    /**
     * Get Employees value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo|null
     */
    public function getEmployees(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo
    {
        return $this->Employees ?? null;
    }
    /**
     * Set Employees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $employees
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setEmployees(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfEmployeeInfo $employees = null): self
    {
        if (is_null($employees) || (is_array($employees) && empty($employees))) {
            unset($this->Employees);
        } else {
            $this->Employees = $employees;
        }
        
        return $this;
    }
    /**
     * Get FacebookUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFacebookUsername(): ?string
    {
        return $this->FacebookUsername ?? null;
    }
    /**
     * Set FacebookUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $facebookUsername
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setFacebookUsername(?string $facebookUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($facebookUsername) && !is_string($facebookUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facebookUsername, true), gettype($facebookUsername)), __LINE__);
        }
        if (is_null($facebookUsername) || (is_array($facebookUsername) && empty($facebookUsername))) {
            unset($this->FacebookUsername);
        } else {
            $this->FacebookUsername = $facebookUsername;
        }
        
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName ?? null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        
        return $this;
    }
    /**
     * Get Gender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender ?? null;
    }
    /**
     * Set Gender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gender
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        if (is_null($gender) || (is_array($gender) && empty($gender))) {
            unset($this->Gender);
        } else {
            $this->Gender = $gender;
        }
        
        return $this;
    }
    /**
     * Get Hobbies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHobbies(): ?string
    {
        return $this->Hobbies ?? null;
    }
    /**
     * Set Hobbies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hobbies
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setHobbies(?string $hobbies = null): self
    {
        // validation for constraint: string
        if (!is_null($hobbies) && !is_string($hobbies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hobbies, true), gettype($hobbies)), __LINE__);
        }
        if (is_null($hobbies) || (is_array($hobbies) && empty($hobbies))) {
            unset($this->Hobbies);
        } else {
            $this->Hobbies = $hobbies;
        }
        
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName ?? null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        
        return $this;
    }
    /**
     * Get MannerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMannerType(): ?string
    {
        return $this->MannerType ?? null;
    }
    /**
     * Set MannerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mannerType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setMannerType(?string $mannerType = null): self
    {
        // validation for constraint: string
        if (!is_null($mannerType) && !is_string($mannerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mannerType, true), gettype($mannerType)), __LINE__);
        }
        if (is_null($mannerType) || (is_array($mannerType) && empty($mannerType))) {
            unset($this->MannerType);
        } else {
            $this->MannerType = $mannerType;
        }
        
        return $this;
    }
    /**
     * Get NationalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNationalCode(): ?string
    {
        return $this->NationalCode ?? null;
    }
    /**
     * Set NationalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nationalCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setNationalCode(?string $nationalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($nationalCode) && !is_string($nationalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalCode, true), gettype($nationalCode)), __LINE__);
        }
        if (is_null($nationalCode) || (is_array($nationalCode) && empty($nationalCode))) {
            unset($this->NationalCode);
        } else {
            $this->NationalCode = $nationalCode;
        }
        
        return $this;
    }
    /**
     * Get PaymentStatusType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentStatusType(): ?string
    {
        return $this->PaymentStatusType ?? null;
    }
    /**
     * Set PaymentStatusType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentStatusType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setPaymentStatusType(?string $paymentStatusType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentStatusType) && !is_string($paymentStatusType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentStatusType, true), gettype($paymentStatusType)), __LINE__);
        }
        if (is_null($paymentStatusType) || (is_array($paymentStatusType) && empty($paymentStatusType))) {
            unset($this->PaymentStatusType);
        } else {
            $this->PaymentStatusType = $paymentStatusType;
        }
        
        return $this;
    }
    /**
     * Get PersonPrefix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonPrefix(): ?string
    {
        return $this->PersonPrefix ?? null;
    }
    /**
     * Set PersonPrefix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personPrefix
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setPersonPrefix(?string $personPrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($personPrefix) && !is_string($personPrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personPrefix, true), gettype($personPrefix)), __LINE__);
        }
        if (is_null($personPrefix) || (is_array($personPrefix) && empty($personPrefix))) {
            unset($this->PersonPrefix);
        } else {
            $this->PersonPrefix = $personPrefix;
        }
        
        return $this;
    }
    /**
     * Get PrefferedContactType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrefferedContactType(): ?string
    {
        return $this->PrefferedContactType ?? null;
    }
    /**
     * Set PrefferedContactType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $prefferedContactType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setPrefferedContactType(?string $prefferedContactType = null): self
    {
        // validation for constraint: string
        if (!is_null($prefferedContactType) && !is_string($prefferedContactType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefferedContactType, true), gettype($prefferedContactType)), __LINE__);
        }
        if (is_null($prefferedContactType) || (is_array($prefferedContactType) && empty($prefferedContactType))) {
            unset($this->PrefferedContactType);
        } else {
            $this->PrefferedContactType = $prefferedContactType;
        }
        
        return $this;
    }
    /**
     * Get Spouse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpouse(): ?string
    {
        return $this->Spouse ?? null;
    }
    /**
     * Set Spouse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $spouse
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
     */
    public function setSpouse(?string $spouse = null): self
    {
        // validation for constraint: string
        if (!is_null($spouse) && !is_string($spouse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spouse, true), gettype($spouse)), __LINE__);
        }
        if (is_null($spouse) || (is_array($spouse) && empty($spouse))) {
            unset($this->Spouse);
        } else {
            $this->Spouse = $spouse;
        }
        
        return $this;
    }
}
