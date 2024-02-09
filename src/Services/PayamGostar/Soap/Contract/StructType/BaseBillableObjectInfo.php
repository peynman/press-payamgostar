<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseBillableObjectInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseBillableObjectInfo
 * @subpackage Structs
 */
class BaseBillableObjectInfo extends GeneralCrmObjectInfo
{
    /**
     * The BillableObjectState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BillableObjectState = null;
    /**
     * The FinalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $FinalValue = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * Constructor method for BaseBillableObjectInfo
     * @uses BaseBillableObjectInfo::setBillableObjectState()
     * @uses BaseBillableObjectInfo::setFinalValue()
     * @uses BaseBillableObjectInfo::setNumber()
     * @param string $billableObjectState
     * @param float $finalValue
     * @param string $number
     */
    public function __construct(?string $billableObjectState = null, ?float $finalValue = null, ?string $number = null)
    {
        $this
            ->setBillableObjectState($billableObjectState)
            ->setFinalValue($finalValue)
            ->setNumber($number);
    }
    /**
     * Get BillableObjectState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillableObjectState(): ?string
    {
        return $this->BillableObjectState ?? null;
    }
    /**
     * Set BillableObjectState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billableObjectState
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\BaseBillableObjectInfo
     */
    public function setBillableObjectState(?string $billableObjectState = null): self
    {
        // validation for constraint: string
        if (!is_null($billableObjectState) && !is_string($billableObjectState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billableObjectState, true), gettype($billableObjectState)), __LINE__);
        }
        if (is_null($billableObjectState) || (is_array($billableObjectState) && empty($billableObjectState))) {
            unset($this->BillableObjectState);
        } else {
            $this->BillableObjectState = $billableObjectState;
        }
        
        return $this;
    }
    /**
     * Get FinalValue value
     * @return float|null
     */
    public function getFinalValue(): ?float
    {
        return $this->FinalValue;
    }
    /**
     * Set FinalValue value
     * @param float $finalValue
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\BaseBillableObjectInfo
     */
    public function setFinalValue(?float $finalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($finalValue) && !(is_float($finalValue) || is_numeric($finalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($finalValue, true), gettype($finalValue)), __LINE__);
        }
        $this->FinalValue = $finalValue;
        
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number ?? null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\BaseBillableObjectInfo
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        
        return $this;
    }
}
