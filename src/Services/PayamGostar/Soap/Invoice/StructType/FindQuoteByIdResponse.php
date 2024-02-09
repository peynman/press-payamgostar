<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindQuoteByIdResponse StructType
 * @subpackage Structs
 */
class FindQuoteByIdResponse extends AbstractStructBase
{
    /**
     * The FindQuoteByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $FindQuoteByIdResult = null;
    /**
     * Constructor method for FindQuoteByIdResponse
     * @uses FindQuoteByIdResponse::setFindQuoteByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findQuoteByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findQuoteByIdResult = null)
    {
        $this
            ->setFindQuoteByIdResult($findQuoteByIdResult);
    }
    /**
     * Get FindQuoteByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getFindQuoteByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->FindQuoteByIdResult ?? null;
    }
    /**
     * Set FindQuoteByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findQuoteByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindQuoteByIdResponse
     */
    public function setFindQuoteByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $findQuoteByIdResult = null): self
    {
        if (is_null($findQuoteByIdResult) || (is_array($findQuoteByIdResult) && empty($findQuoteByIdResult))) {
            unset($this->FindQuoteByIdResult);
        } else {
            $this->FindQuoteByIdResult = $findQuoteByIdResult;
        }
        
        return $this;
    }
}
