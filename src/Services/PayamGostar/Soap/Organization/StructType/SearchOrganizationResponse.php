<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrganizationResponse StructType
 * @subpackage Structs
 */
class SearchOrganizationResponse extends AbstractStructBase
{
    /**
     * The SearchOrganizationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $SearchOrganizationResult = null;
    /**
     * Constructor method for SearchOrganizationResponse
     * @uses SearchOrganizationResponse::setSearchOrganizationResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $searchOrganizationResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $searchOrganizationResult = null)
    {
        $this
            ->setSearchOrganizationResult($searchOrganizationResult);
    }
    /**
     * Get SearchOrganizationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult|null
     */
    public function getSearchOrganizationResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult
    {
        return $this->SearchOrganizationResult ?? null;
    }
    /**
     * Set SearchOrganizationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $searchOrganizationResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SearchOrganizationResponse
     */
    public function setSearchOrganizationResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult $searchOrganizationResult = null): self
    {
        if (is_null($searchOrganizationResult) || (is_array($searchOrganizationResult) && empty($searchOrganizationResult))) {
            unset($this->SearchOrganizationResult);
        } else {
            $this->SearchOrganizationResult = $searchOrganizationResult;
        }
        
        return $this;
    }
}
