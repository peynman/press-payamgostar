<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePriceListResponse StructType
 * @subpackage Structs
 */
class DeletePriceListResponse extends AbstractStructBase
{
    /**
     * The DeletePriceListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $DeletePriceListResult = null;
    /**
     * Constructor method for DeletePriceListResponse
     * @uses DeletePriceListResponse::setDeletePriceListResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $deletePriceListResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $deletePriceListResult = null)
    {
        $this
            ->setDeletePriceListResult($deletePriceListResult);
    }
    /**
     * Get DeletePriceListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult|null
     */
    public function getDeletePriceListResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult
    {
        return $this->DeletePriceListResult ?? null;
    }
    /**
     * Set DeletePriceListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $deletePriceListResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\DeletePriceListResponse
     */
    public function setDeletePriceListResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $deletePriceListResult = null): self
    {
        if (is_null($deletePriceListResult) || (is_array($deletePriceListResult) && empty($deletePriceListResult))) {
            unset($this->DeletePriceListResult);
        } else {
            $this->DeletePriceListResult = $deletePriceListResult;
        }
        
        return $this;
    }
}
