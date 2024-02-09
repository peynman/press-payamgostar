<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApprovedResponse StructType
 * @subpackage Structs
 */
class ApprovedResponse extends AbstractStructBase
{
    /**
     * The ApprovedResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $ApprovedResult = null;
    /**
     * Constructor method for ApprovedResponse
     * @uses ApprovedResponse::setApprovedResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $approvedResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $approvedResult = null)
    {
        $this
            ->setApprovedResult($approvedResult);
    }
    /**
     * Get ApprovedResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getApprovedResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->ApprovedResult ?? null;
    }
    /**
     * Set ApprovedResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $approvedResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ApprovedResponse
     */
    public function setApprovedResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $approvedResult = null): self
    {
        if (is_null($approvedResult) || (is_array($approvedResult) && empty($approvedResult))) {
            unset($this->ApprovedResult);
        } else {
            $this->ApprovedResult = $approvedResult;
        }
        
        return $this;
    }
}
