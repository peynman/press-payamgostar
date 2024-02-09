<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCrmObjectExtendedPropertyInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseCrmObjectExtendedPropertyInfo
 * @subpackage Structs
 */
class BaseCrmObjectExtendedPropertyInfo extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The UserKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UserKey = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for BaseCrmObjectExtendedPropertyInfo
     * @uses BaseCrmObjectExtendedPropertyInfo::setName()
     * @uses BaseCrmObjectExtendedPropertyInfo::setUserKey()
     * @uses BaseCrmObjectExtendedPropertyInfo::setValue()
     * @param string $name
     * @param string $userKey
     * @param string $value
     */
    public function __construct(?string $name = null, ?string $userKey = null, ?string $value = null)
    {
        $this
            ->setName($name)
            ->setUserKey($userKey)
            ->setValue($value);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\BaseCrmObjectExtendedPropertyInfo
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
     * Get UserKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserKey(): ?string
    {
        return $this->UserKey ?? null;
    }
    /**
     * Set UserKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userKey
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\BaseCrmObjectExtendedPropertyInfo
     */
    public function setUserKey(?string $userKey = null): self
    {
        // validation for constraint: string
        if (!is_null($userKey) && !is_string($userKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userKey, true), gettype($userKey)), __LINE__);
        }
        if (is_null($userKey) || (is_array($userKey) && empty($userKey))) {
            unset($this->UserKey);
        } else {
            $this->UserKey = $userKey;
        }
        
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value ?? null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\BaseCrmObjectExtendedPropertyInfo
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
}
