<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityContact StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentityContact
 * @subpackage Structs
 */
class IdentityContact extends AbstractStructBase
{
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
     * The IsDefault
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDefault = null;
    /**
     * The IsDeleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDeleted = null;
    /**
     * The RefId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RefId = null;
    /**
     * Constructor method for IdentityContact
     * @uses IdentityContact::setId()
     * @uses IdentityContact::setIsDefault()
     * @uses IdentityContact::setIsDeleted()
     * @uses IdentityContact::setRefId()
     * @param string $id
     * @param bool $isDefault
     * @param bool $isDeleted
     * @param string $refId
     */
    public function __construct(?string $id = null, ?bool $isDefault = null, ?bool $isDeleted = null, ?string $refId = null)
    {
        $this
            ->setId($id)
            ->setIsDefault($isDefault)
            ->setIsDeleted($isDeleted)
            ->setRefId($refId);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContact
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
     * Get IsDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContact
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->IsDefault = $isDefault;
        
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContact
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\IdentityContact
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
}
