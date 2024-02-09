<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpportunityInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OpportunityInfoResult
 * @subpackage Structs
 */
class OpportunityInfoResult extends OperationResult
{
    /**
     * The OpportunityInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo $OpportunityInfo = null;
    /**
     * The OpportunityInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo $OpportunityInfoList = null;
    /**
     * Constructor method for OpportunityInfoResult
     * @uses OpportunityInfoResult::setOpportunityInfo()
     * @uses OpportunityInfoResult::setOpportunityInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo $opportunityInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo $opportunityInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo $opportunityInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo $opportunityInfoList = null)
    {
        $this
            ->setOpportunityInfo($opportunityInfo)
            ->setOpportunityInfoList($opportunityInfoList);
    }
    /**
     * Get OpportunityInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo|null
     */
    public function getOpportunityInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo
    {
        return $this->OpportunityInfo ?? null;
    }
    /**
     * Set OpportunityInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo $opportunityInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult
     */
    public function setOpportunityInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfo $opportunityInfo = null): self
    {
        if (is_null($opportunityInfo) || (is_array($opportunityInfo) && empty($opportunityInfo))) {
            unset($this->OpportunityInfo);
        } else {
            $this->OpportunityInfo = $opportunityInfo;
        }
        
        return $this;
    }
    /**
     * Get OpportunityInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo|null
     */
    public function getOpportunityInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo
    {
        return $this->OpportunityInfoList ?? null;
    }
    /**
     * Set OpportunityInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo $opportunityInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\OpportunityInfoResult
     */
    public function setOpportunityInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ArrayType\ArrayOfOpportunityInfo $opportunityInfoList = null): self
    {
        if (is_null($opportunityInfoList) || (is_array($opportunityInfoList) && empty($opportunityInfoList))) {
            unset($this->OpportunityInfoList);
        } else {
            $this->OpportunityInfoList = $opportunityInfoList;
        }
        
        return $this;
    }
}
