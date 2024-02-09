<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrganizationByIdResponse StructType
 * @subpackage Structs
 */
class DeleteOrganizationByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteOrganizationByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $DeleteOrganizationByIdResult = null;
    /**
     * Constructor method for DeleteOrganizationByIdResponse
     * @uses DeleteOrganizationByIdResponse::setDeleteOrganizationByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $deleteOrganizationByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $deleteOrganizationByIdResult = null)
    {
        $this
            ->setDeleteOrganizationByIdResult($deleteOrganizationByIdResult);
    }
    /**
     * Get DeleteOrganizationByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteOrganizationByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult
    {
        return $this->DeleteOrganizationByIdResult ?? null;
    }
    /**
     * Set DeleteOrganizationByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $deleteOrganizationByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\DeleteOrganizationByIdResponse
     */
    public function setDeleteOrganizationByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\SaveCrmObjectResult $deleteOrganizationByIdResult = null): self
    {
        if (is_null($deleteOrganizationByIdResult) || (is_array($deleteOrganizationByIdResult) && empty($deleteOrganizationByIdResult))) {
            unset($this->DeleteOrganizationByIdResult);
        } else {
            $this->DeleteOrganizationByIdResult = $deleteOrganizationByIdResult;
        }
        
        return $this;
    }
}
