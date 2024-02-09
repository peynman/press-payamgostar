<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePriceListResponse StructType
 * @subpackage Structs
 */
class SavePriceListResponse extends AbstractStructBase
{
    /**
     * The SavePriceListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $SavePriceListResult = null;
    /**
     * Constructor method for SavePriceListResponse
     * @uses SavePriceListResponse::setSavePriceListResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $savePriceListResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $savePriceListResult = null)
    {
        $this
            ->setSavePriceListResult($savePriceListResult);
    }
    /**
     * Get SavePriceListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult|null
     */
    public function getSavePriceListResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult
    {
        return $this->SavePriceListResult ?? null;
    }
    /**
     * Set SavePriceListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $savePriceListResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceListResponse
     */
    public function setSavePriceListResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListSaveResult $savePriceListResult = null): self
    {
        if (is_null($savePriceListResult) || (is_array($savePriceListResult) && empty($savePriceListResult))) {
            unset($this->SavePriceListResult);
        } else {
            $this->SavePriceListResult = $savePriceListResult;
        }
        
        return $this;
    }
}
