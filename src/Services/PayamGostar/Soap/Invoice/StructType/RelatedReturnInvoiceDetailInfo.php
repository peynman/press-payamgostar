<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedReturnInvoiceDetailInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelatedReturnInvoiceDetailInfo
 * @subpackage Structs
 */
class RelatedReturnInvoiceDetailInfo extends AbstractStructBase
{
    /**
     * The RelatedInvoiceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo $RelatedInvoiceInfo = null;
    /**
     * The ReturnedCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ReturnedCount = null;
    /**
     * Constructor method for RelatedReturnInvoiceDetailInfo
     * @uses RelatedReturnInvoiceDetailInfo::setRelatedInvoiceInfo()
     * @uses RelatedReturnInvoiceDetailInfo::setReturnedCount()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo $relatedInvoiceInfo
     * @param float $returnedCount
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo $relatedInvoiceInfo = null, ?float $returnedCount = null)
    {
        $this
            ->setRelatedInvoiceInfo($relatedInvoiceInfo)
            ->setReturnedCount($returnedCount);
    }
    /**
     * Get RelatedInvoiceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo|null
     */
    public function getRelatedInvoiceInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo
    {
        return $this->RelatedInvoiceInfo ?? null;
    }
    /**
     * Set RelatedInvoiceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo $relatedInvoiceInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
     */
    public function setRelatedInvoiceInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedInvoiceInfo $relatedInvoiceInfo = null): self
    {
        if (is_null($relatedInvoiceInfo) || (is_array($relatedInvoiceInfo) && empty($relatedInvoiceInfo))) {
            unset($this->RelatedInvoiceInfo);
        } else {
            $this->RelatedInvoiceInfo = $relatedInvoiceInfo;
        }
        
        return $this;
    }
    /**
     * Get ReturnedCount value
     * @return float|null
     */
    public function getReturnedCount(): ?float
    {
        return $this->ReturnedCount;
    }
    /**
     * Set ReturnedCount value
     * @param float $returnedCount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\RelatedReturnInvoiceDetailInfo
     */
    public function setReturnedCount(?float $returnedCount = null): self
    {
        // validation for constraint: float
        if (!is_null($returnedCount) && !(is_float($returnedCount) || is_numeric($returnedCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($returnedCount, true), gettype($returnedCount)), __LINE__);
        }
        $this->ReturnedCount = $returnedCount;
        
        return $this;
    }
}
