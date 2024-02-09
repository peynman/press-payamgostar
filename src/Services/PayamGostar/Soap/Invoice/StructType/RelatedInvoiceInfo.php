<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedInvoiceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelatedInvoiceInfo
 * @subpackage Structs
 */
class RelatedInvoiceInfo extends AbstractStructBase
{
    /**
     * The RelatedInvoiceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $RelatedInvoiceId = null;
    /**
     * The RelatedInvoiceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RelatedInvoiceNumber = null;
    /**
     * The RelatedInvoiceTypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RelatedInvoiceTypeCode = null;
    /**
     * Constructor method for RelatedInvoiceInfo
     * @uses RelatedInvoiceInfo::setRelatedInvoiceId()
     * @uses RelatedInvoiceInfo::setRelatedInvoiceNumber()
     * @uses RelatedInvoiceInfo::setRelatedInvoiceTypeCode()
     * @param string $relatedInvoiceId
     * @param string $relatedInvoiceNumber
     * @param string $relatedInvoiceTypeCode
     */
    public function __construct(?string $relatedInvoiceId = null, ?string $relatedInvoiceNumber = null, ?string $relatedInvoiceTypeCode = null)
    {
        $this
            ->setRelatedInvoiceId($relatedInvoiceId)
            ->setRelatedInvoiceNumber($relatedInvoiceNumber)
            ->setRelatedInvoiceTypeCode($relatedInvoiceTypeCode);
    }
    /**
     * Get RelatedInvoiceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelatedInvoiceId(): ?string
    {
        return $this->RelatedInvoiceId ?? null;
    }
    /**
     * Set RelatedInvoiceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relatedInvoiceId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo
     */
    public function setRelatedInvoiceId(?string $relatedInvoiceId = null): self
    {
        // validation for constraint: string
        if (!is_null($relatedInvoiceId) && !is_string($relatedInvoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedInvoiceId, true), gettype($relatedInvoiceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($relatedInvoiceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $relatedInvoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($relatedInvoiceId, true)), __LINE__);
        }
        if (is_null($relatedInvoiceId) || (is_array($relatedInvoiceId) && empty($relatedInvoiceId))) {
            unset($this->RelatedInvoiceId);
        } else {
            $this->RelatedInvoiceId = $relatedInvoiceId;
        }
        
        return $this;
    }
    /**
     * Get RelatedInvoiceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelatedInvoiceNumber(): ?string
    {
        return $this->RelatedInvoiceNumber ?? null;
    }
    /**
     * Set RelatedInvoiceNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relatedInvoiceNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo
     */
    public function setRelatedInvoiceNumber(?string $relatedInvoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($relatedInvoiceNumber) && !is_string($relatedInvoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedInvoiceNumber, true), gettype($relatedInvoiceNumber)), __LINE__);
        }
        if (is_null($relatedInvoiceNumber) || (is_array($relatedInvoiceNumber) && empty($relatedInvoiceNumber))) {
            unset($this->RelatedInvoiceNumber);
        } else {
            $this->RelatedInvoiceNumber = $relatedInvoiceNumber;
        }
        
        return $this;
    }
    /**
     * Get RelatedInvoiceTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelatedInvoiceTypeCode(): ?string
    {
        return $this->RelatedInvoiceTypeCode ?? null;
    }
    /**
     * Set RelatedInvoiceTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relatedInvoiceTypeCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo
     */
    public function setRelatedInvoiceTypeCode(?string $relatedInvoiceTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($relatedInvoiceTypeCode) && !is_string($relatedInvoiceTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedInvoiceTypeCode, true), gettype($relatedInvoiceTypeCode)), __LINE__);
        }
        if (is_null($relatedInvoiceTypeCode) || (is_array($relatedInvoiceTypeCode) && empty($relatedInvoiceTypeCode))) {
            unset($this->RelatedInvoiceTypeCode);
        } else {
            $this->RelatedInvoiceTypeCode = $relatedInvoiceTypeCode;
        }
        
        return $this;
    }
}
