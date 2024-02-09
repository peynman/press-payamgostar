<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInvoicesByIdentityIdResponse StructType
 * @subpackage Structs
 */
class GetInvoicesByIdentityIdResponse extends AbstractStructBase
{
    /**
     * The GetInvoicesByIdentityIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $GetInvoicesByIdentityIdResult = null;
    /**
     * Constructor method for GetInvoicesByIdentityIdResponse
     * @uses GetInvoicesByIdentityIdResponse::setGetInvoicesByIdentityIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $getInvoicesByIdentityIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $getInvoicesByIdentityIdResult = null)
    {
        $this
            ->setGetInvoicesByIdentityIdResult($getInvoicesByIdentityIdResult);
    }
    /**
     * Get GetInvoicesByIdentityIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult|null
     */
    public function getGetInvoicesByIdentityIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
    {
        return $this->GetInvoicesByIdentityIdResult ?? null;
    }
    /**
     * Set GetInvoicesByIdentityIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $getInvoicesByIdentityIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\GetInvoicesByIdentityIdResponse
     */
    public function setGetInvoicesByIdentityIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult $getInvoicesByIdentityIdResult = null): self
    {
        if (is_null($getInvoicesByIdentityIdResult) || (is_array($getInvoicesByIdentityIdResult) && empty($getInvoicesByIdentityIdResult))) {
            unset($this->GetInvoicesByIdentityIdResult);
        } else {
            $this->GetInvoicesByIdentityIdResult = $getInvoicesByIdentityIdResult;
        }
        
        return $this;
    }
}
