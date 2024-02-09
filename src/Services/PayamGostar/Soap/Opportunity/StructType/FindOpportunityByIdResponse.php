<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindOpportunityByIdResponse StructType
 * @subpackage Structs
 */
class FindOpportunityByIdResponse extends AbstractStructBase
{
    /**
     * The FindOpportunityByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $FindOpportunityByIdResult = null;
    /**
     * Constructor method for FindOpportunityByIdResponse
     * @uses FindOpportunityByIdResponse::setFindOpportunityByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $findOpportunityByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $findOpportunityByIdResult = null)
    {
        $this
            ->setFindOpportunityByIdResult($findOpportunityByIdResult);
    }
    /**
     * Get FindOpportunityByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult|null
     */
    public function getFindOpportunityByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult
    {
        return $this->FindOpportunityByIdResult ?? null;
    }
    /**
     * Set FindOpportunityByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $findOpportunityByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\FindOpportunityByIdResponse
     */
    public function setFindOpportunityByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult $findOpportunityByIdResult = null): self
    {
        if (is_null($findOpportunityByIdResult) || (is_array($findOpportunityByIdResult) && empty($findOpportunityByIdResult))) {
            unset($this->FindOpportunityByIdResult);
        } else {
            $this->FindOpportunityByIdResult = $findOpportunityByIdResult;
        }
        
        return $this;
    }
}
