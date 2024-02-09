<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPhoneLogByIdResponse StructType
 * @subpackage Structs
 */
class FindPhoneLogByIdResponse extends AbstractStructBase
{
    /**
     * The FindPhoneLogByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $FindPhoneLogByIdResult = null;
    /**
     * Constructor method for FindPhoneLogByIdResponse
     * @uses FindPhoneLogByIdResponse::setFindPhoneLogByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $findPhoneLogByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $findPhoneLogByIdResult = null)
    {
        $this
            ->setFindPhoneLogByIdResult($findPhoneLogByIdResult);
    }
    /**
     * Get FindPhoneLogByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult|null
     */
    public function getFindPhoneLogByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult
    {
        return $this->FindPhoneLogByIdResult ?? null;
    }
    /**
     * Set FindPhoneLogByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $findPhoneLogByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\FindPhoneLogByIdResponse
     */
    public function setFindPhoneLogByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult $findPhoneLogByIdResult = null): self
    {
        if (is_null($findPhoneLogByIdResult) || (is_array($findPhoneLogByIdResult) && empty($findPhoneLogByIdResult))) {
            unset($this->FindPhoneLogByIdResult);
        } else {
            $this->FindPhoneLogByIdResult = $findPhoneLogByIdResult;
        }
        
        return $this;
    }
}
