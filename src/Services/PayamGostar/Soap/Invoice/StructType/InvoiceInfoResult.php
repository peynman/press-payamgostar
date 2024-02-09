<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InvoiceInfoResult
 * @subpackage Structs
 */
class InvoiceInfoResult extends OperationResult
{
    /**
     * The InvoiceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo $InvoiceInfo = null;
    /**
     * The InvoiceInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo $InvoiceInfoList = null;
    /**
     * Constructor method for InvoiceInfoResult
     * @uses InvoiceInfoResult::setInvoiceInfo()
     * @uses InvoiceInfoResult::setInvoiceInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo $invoiceInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo $invoiceInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo $invoiceInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo $invoiceInfoList = null)
    {
        $this
            ->setInvoiceInfo($invoiceInfo)
            ->setInvoiceInfoList($invoiceInfoList);
    }
    /**
     * Get InvoiceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo|null
     */
    public function getInvoiceInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo
    {
        return $this->InvoiceInfo ?? null;
    }
    /**
     * Set InvoiceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo $invoiceInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
     */
    public function setInvoiceInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfo $invoiceInfo = null): self
    {
        if (is_null($invoiceInfo) || (is_array($invoiceInfo) && empty($invoiceInfo))) {
            unset($this->InvoiceInfo);
        } else {
            $this->InvoiceInfo = $invoiceInfo;
        }
        
        return $this;
    }
    /**
     * Get InvoiceInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo|null
     */
    public function getInvoiceInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo
    {
        return $this->InvoiceInfoList ?? null;
    }
    /**
     * Set InvoiceInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo $invoiceInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\InvoiceInfoResult
     */
    public function setInvoiceInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\ArrayType\ArrayOfInvoiceInfo $invoiceInfoList = null): self
    {
        if (is_null($invoiceInfoList) || (is_array($invoiceInfoList) && empty($invoiceInfoList))) {
            unset($this->InvoiceInfoList);
        } else {
            $this->InvoiceInfoList = $invoiceInfoList;
        }
        
        return $this;
    }
}
