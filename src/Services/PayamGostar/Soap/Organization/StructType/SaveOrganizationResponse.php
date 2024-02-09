<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrganizationResponse StructType
 * @subpackage Structs
 */
class SaveOrganizationResponse extends AbstractStructBase
{
    /**
     * The SaveOrganizationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $SaveOrganizationResult = null;
    /**
     * Constructor method for SaveOrganizationResponse
     * @uses SaveOrganizationResponse::setSaveOrganizationResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $saveOrganizationResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $saveOrganizationResult = null)
    {
        $this
            ->setSaveOrganizationResult($saveOrganizationResult);
    }
    /**
     * Get SaveOrganizationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult|null
     */
    public function getSaveOrganizationResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult
    {
        return $this->SaveOrganizationResult ?? null;
    }
    /**
     * Set SaveOrganizationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $saveOrganizationResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveOrganizationResponse
     */
    public function setSaveOrganizationResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $saveOrganizationResult = null): self
    {
        if (is_null($saveOrganizationResult) || (is_array($saveOrganizationResult) && empty($saveOrganizationResult))) {
            unset($this->SaveOrganizationResult);
        } else {
            $this->SaveOrganizationResult = $saveOrganizationResult;
        }
        
        return $this;
    }
}
