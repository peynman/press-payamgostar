<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOpportunityResponse StructType
 * @subpackage Structs
 */
class SaveOpportunityResponse extends AbstractStructBase
{
    /**
     * The SaveOpportunityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $SaveOpportunityResult = null;
    /**
     * Constructor method for SaveOpportunityResponse
     * @uses SaveOpportunityResponse::setSaveOpportunityResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $saveOpportunityResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $saveOpportunityResult = null)
    {
        $this
            ->setSaveOpportunityResult($saveOpportunityResult);
    }
    /**
     * Get SaveOpportunityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult|null
     */
    public function getSaveOpportunityResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult
    {
        return $this->SaveOpportunityResult ?? null;
    }
    /**
     * Set SaveOpportunityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $saveOpportunityResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveOpportunityResponse
     */
    public function setSaveOpportunityResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $saveOpportunityResult = null): self
    {
        if (is_null($saveOpportunityResult) || (is_array($saveOpportunityResult) && empty($saveOpportunityResult))) {
            unset($this->SaveOpportunityResult);
        } else {
            $this->SaveOpportunityResult = $saveOpportunityResult;
        }
        
        return $this;
    }
}
