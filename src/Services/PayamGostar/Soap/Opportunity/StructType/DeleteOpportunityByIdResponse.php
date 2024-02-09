<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOpportunityByIdResponse StructType
 * @subpackage Structs
 */
class DeleteOpportunityByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteOpportunityByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $DeleteOpportunityByIdResult = null;
    /**
     * Constructor method for DeleteOpportunityByIdResponse
     * @uses DeleteOpportunityByIdResponse::setDeleteOpportunityByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $deleteOpportunityByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $deleteOpportunityByIdResult = null)
    {
        $this
            ->setDeleteOpportunityByIdResult($deleteOpportunityByIdResult);
    }
    /**
     * Get DeleteOpportunityByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteOpportunityByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult
    {
        return $this->DeleteOpportunityByIdResult ?? null;
    }
    /**
     * Set DeleteOpportunityByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $deleteOpportunityByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\DeleteOpportunityByIdResponse
     */
    public function setDeleteOpportunityByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\StructType\SaveCrmObjectResult $deleteOpportunityByIdResult = null): self
    {
        if (is_null($deleteOpportunityByIdResult) || (is_array($deleteOpportunityByIdResult) && empty($deleteOpportunityByIdResult))) {
            unset($this->DeleteOpportunityByIdResult);
        } else {
            $this->DeleteOpportunityByIdResult = $deleteOpportunityByIdResult;
        }
        
        return $this;
    }
}
