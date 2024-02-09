<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPhoneLogResponse StructType
 * @subpackage Structs
 */
class SearchPhoneLogResponse extends AbstractStructBase
{
    /**
     * The SearchPhoneLogResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $SearchPhoneLogResult = null;
    /**
     * Constructor method for SearchPhoneLogResponse
     * @uses SearchPhoneLogResponse::setSearchPhoneLogResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $searchPhoneLogResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $searchPhoneLogResult = null)
    {
        $this
            ->setSearchPhoneLogResult($searchPhoneLogResult);
    }
    /**
     * Get SearchPhoneLogResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult|null
     */
    public function getSearchPhoneLogResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult
    {
        return $this->SearchPhoneLogResult ?? null;
    }
    /**
     * Set SearchPhoneLogResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $searchPhoneLogResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SearchPhoneLogResponse
     */
    public function setSearchPhoneLogResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $searchPhoneLogResult = null): self
    {
        if (is_null($searchPhoneLogResult) || (is_array($searchPhoneLogResult) && empty($searchPhoneLogResult))) {
            unset($this->SearchPhoneLogResult);
        } else {
            $this->SearchPhoneLogResult = $searchPhoneLogResult;
        }
        
        return $this;
    }
}
