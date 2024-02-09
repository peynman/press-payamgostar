<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindOrganizationByIdResponse StructType
 * @subpackage Structs
 */
class FindOrganizationByIdResponse extends AbstractStructBase
{
    /**
     * The FindOrganizationByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $FindOrganizationByIdResult = null;
    /**
     * Constructor method for FindOrganizationByIdResponse
     * @uses FindOrganizationByIdResponse::setFindOrganizationByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $findOrganizationByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $findOrganizationByIdResult = null)
    {
        $this
            ->setFindOrganizationByIdResult($findOrganizationByIdResult);
    }
    /**
     * Get FindOrganizationByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult|null
     */
    public function getFindOrganizationByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult
    {
        return $this->FindOrganizationByIdResult ?? null;
    }
    /**
     * Set FindOrganizationByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $findOrganizationByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\FindOrganizationByIdResponse
     */
    public function setFindOrganizationByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $findOrganizationByIdResult = null): self
    {
        if (is_null($findOrganizationByIdResult) || (is_array($findOrganizationByIdResult) && empty($findOrganizationByIdResult))) {
            unset($this->FindOrganizationByIdResult);
        } else {
            $this->FindOrganizationByIdResult = $findOrganizationByIdResult;
        }
        
        return $this;
    }
}
