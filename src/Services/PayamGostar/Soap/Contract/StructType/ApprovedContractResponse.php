<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApprovedContractResponse StructType
 * @subpackage Structs
 */
class ApprovedContractResponse extends AbstractStructBase
{
    /**
     * The ApprovedContractResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $ApprovedContractResult = null;
    /**
     * Constructor method for ApprovedContractResponse
     * @uses ApprovedContractResponse::setApprovedContractResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $approvedContractResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $approvedContractResult = null)
    {
        $this
            ->setApprovedContractResult($approvedContractResult);
    }
    /**
     * Get ApprovedContractResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    public function getApprovedContractResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult
    {
        return $this->ApprovedContractResult ?? null;
    }
    /**
     * Set ApprovedContractResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $approvedContractResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ApprovedContractResponse
     */
    public function setApprovedContractResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $approvedContractResult = null): self
    {
        if (is_null($approvedContractResult) || (is_array($approvedContractResult) && empty($approvedContractResult))) {
            unset($this->ApprovedContractResult);
        } else {
            $this->ApprovedContractResult = $approvedContractResult;
        }
        
        return $this;
    }
}
