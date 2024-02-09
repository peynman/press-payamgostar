<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOpportunityResponse StructType
 * @subpackage Structs
 */
class SearchOpportunityResponse extends AbstractStructBase
{
    /**
     * The SearchOpportunityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $SearchOpportunityResult = null;
    /**
     * Constructor method for SearchOpportunityResponse
     * @uses SearchOpportunityResponse::setSearchOpportunityResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $searchOpportunityResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $searchOpportunityResult = null)
    {
        $this
            ->setSearchOpportunityResult($searchOpportunityResult);
    }
    /**
     * Get SearchOpportunityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult|null
     */
    public function getSearchOpportunityResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult
    {
        return $this->SearchOpportunityResult ?? null;
    }
    /**
     * Set SearchOpportunityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $searchOpportunityResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SearchOpportunityResponse
     */
    public function setSearchOpportunityResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $searchOpportunityResult = null): self
    {
        if (is_null($searchOpportunityResult) || (is_array($searchOpportunityResult) && empty($searchOpportunityResult))) {
            unset($this->SearchOpportunityResult);
        } else {
            $this->SearchOpportunityResult = $searchOpportunityResult;
        }
        
        return $this;
    }
}
