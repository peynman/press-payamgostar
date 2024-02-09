<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketsHistoryFileResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketsHistoryFileResult
 * @subpackage Structs
 */
class TicketsHistoryFileResult extends SaveCrmObjectResult
{
    /**
     * The Fileinfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo $Fileinfo = null;
    /**
     * Constructor method for TicketsHistoryFileResult
     * @uses TicketsHistoryFileResult::setFileinfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo $fileinfo
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo $fileinfo = null)
    {
        $this
            ->setFileinfo($fileinfo);
    }
    /**
     * Get Fileinfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    public function getFileinfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo
    {
        return $this->Fileinfo ?? null;
    }
    /**
     * Set Fileinfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo $fileinfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketsHistoryFileResult
     */
    public function setFileinfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo $fileinfo = null): self
    {
        if (is_null($fileinfo) || (is_array($fileinfo) && empty($fileinfo))) {
            unset($this->Fileinfo);
        } else {
            $this->Fileinfo = $fileinfo;
        }
        
        return $this;
    }
}
