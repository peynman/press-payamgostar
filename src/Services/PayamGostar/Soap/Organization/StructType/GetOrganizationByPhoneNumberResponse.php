<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationByPhoneNumberResponse StructType
 * @subpackage Structs
 */
class GetOrganizationByPhoneNumberResponse extends AbstractStructBase
{
    /**
     * The GetOrganizationByPhoneNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $GetOrganizationByPhoneNumberResult = null;
    /**
     * Constructor method for GetOrganizationByPhoneNumberResponse
     * @uses GetOrganizationByPhoneNumberResponse::setGetOrganizationByPhoneNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $getOrganizationByPhoneNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $getOrganizationByPhoneNumberResult = null)
    {
        $this
            ->setGetOrganizationByPhoneNumberResult($getOrganizationByPhoneNumberResult);
    }
    /**
     * Get GetOrganizationByPhoneNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult|null
     */
    public function getGetOrganizationByPhoneNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult
    {
        return $this->GetOrganizationByPhoneNumberResult ?? null;
    }
    /**
     * Set GetOrganizationByPhoneNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $getOrganizationByPhoneNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\GetOrganizationByPhoneNumberResponse
     */
    public function setGetOrganizationByPhoneNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $getOrganizationByPhoneNumberResult = null): self
    {
        if (is_null($getOrganizationByPhoneNumberResult) || (is_array($getOrganizationByPhoneNumberResult) && empty($getOrganizationByPhoneNumberResult))) {
            unset($this->GetOrganizationByPhoneNumberResult);
        } else {
            $this->GetOrganizationByPhoneNumberResult = $getOrganizationByPhoneNumberResult;
        }
        
        return $this;
    }
}
