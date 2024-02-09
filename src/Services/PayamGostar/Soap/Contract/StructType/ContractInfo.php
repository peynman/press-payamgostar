<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContractInfo
 * @subpackage Structs
 */
class ContractInfo extends BaseBillableObjectInfo
{
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The EndDatePersian
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDatePersian = null;
    /**
     * The IsBillable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsBillable = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The StartDatePersian
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDatePersian = null;
    /**
     * Constructor method for ContractInfo
     * @uses ContractInfo::setEndDate()
     * @uses ContractInfo::setEndDatePersian()
     * @uses ContractInfo::setIsBillable()
     * @uses ContractInfo::setStartDate()
     * @uses ContractInfo::setStartDatePersian()
     * @param string $endDate
     * @param string $endDatePersian
     * @param bool $isBillable
     * @param string $startDate
     * @param string $startDatePersian
     */
    public function __construct(?string $endDate = null, ?string $endDatePersian = null, ?bool $isBillable = null, ?string $startDate = null, ?string $startDatePersian = null)
    {
        $this
            ->setEndDate($endDate)
            ->setEndDatePersian($endDatePersian)
            ->setIsBillable($isBillable)
            ->setStartDate($startDate)
            ->setStartDatePersian($startDatePersian);
    }
    /**
     * Get EndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate ?? null;
    }
    /**
     * Set EndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->EndDate);
        } else {
            $this->EndDate = $endDate;
        }
        
        return $this;
    }
    /**
     * Get EndDatePersian value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDatePersian(): ?string
    {
        return $this->EndDatePersian ?? null;
    }
    /**
     * Set EndDatePersian value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDatePersian
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo
     */
    public function setEndDatePersian(?string $endDatePersian = null): self
    {
        // validation for constraint: string
        if (!is_null($endDatePersian) && !is_string($endDatePersian)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDatePersian, true), gettype($endDatePersian)), __LINE__);
        }
        if (is_null($endDatePersian) || (is_array($endDatePersian) && empty($endDatePersian))) {
            unset($this->EndDatePersian);
        } else {
            $this->EndDatePersian = $endDatePersian;
        }
        
        return $this;
    }
    /**
     * Get IsBillable value
     * @return bool|null
     */
    public function getIsBillable(): ?bool
    {
        return $this->IsBillable;
    }
    /**
     * Set IsBillable value
     * @param bool $isBillable
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo
     */
    public function setIsBillable(?bool $isBillable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBillable) && !is_bool($isBillable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBillable, true), gettype($isBillable)), __LINE__);
        }
        $this->IsBillable = $isBillable;
        
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate ?? null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
        
        return $this;
    }
    /**
     * Get StartDatePersian value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDatePersian(): ?string
    {
        return $this->StartDatePersian ?? null;
    }
    /**
     * Set StartDatePersian value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDatePersian
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo
     */
    public function setStartDatePersian(?string $startDatePersian = null): self
    {
        // validation for constraint: string
        if (!is_null($startDatePersian) && !is_string($startDatePersian)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDatePersian, true), gettype($startDatePersian)), __LINE__);
        }
        if (is_null($startDatePersian) || (is_array($startDatePersian) && empty($startDatePersian))) {
            unset($this->StartDatePersian);
        } else {
            $this->StartDatePersian = $startDatePersian;
        }
        
        return $this;
    }
}
