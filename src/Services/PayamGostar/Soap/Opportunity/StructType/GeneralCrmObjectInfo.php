<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralCrmObjectInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GeneralCrmObjectInfo
 * @subpackage Structs
 */
class GeneralCrmObjectInfo extends BaseCrmObjectInfo
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The IdentityId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IdentityId = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * Constructor method for GeneralCrmObjectInfo
     * @uses GeneralCrmObjectInfo::setDescription()
     * @uses GeneralCrmObjectInfo::setIdentityId()
     * @uses GeneralCrmObjectInfo::setSubject()
     * @param string $description
     * @param string $identityId
     * @param string $subject
     */
    public function __construct(?string $description = null, ?string $identityId = null, ?string $subject = null)
    {
        $this
            ->setDescription($description)
            ->setIdentityId($identityId)
            ->setSubject($subject);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\GeneralCrmObjectInfo
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
     * Get IdentityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentityId(): ?string
    {
        return $this->IdentityId ?? null;
    }
    /**
     * Set IdentityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identityId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\GeneralCrmObjectInfo
     */
    public function setIdentityId(?string $identityId = null): self
    {
        // validation for constraint: string
        if (!is_null($identityId) && !is_string($identityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityId, true), gettype($identityId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($identityId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $identityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($identityId, true)), __LINE__);
        }
        if (is_null($identityId) || (is_array($identityId) && empty($identityId))) {
            unset($this->IdentityId);
        } else {
            $this->IdentityId = $identityId;
        }
        
        return $this;
    }
    /**
     * Get Subject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject ?? null;
    }
    /**
     * Set Subject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subject
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\GeneralCrmObjectInfo
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        if (is_null($subject) || (is_array($subject) && empty($subject))) {
            unset($this->Subject);
        } else {
            $this->Subject = $subject;
        }
        
        return $this;
    }
}
