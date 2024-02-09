<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContractByIdResponse StructType
 * @subpackage Structs
 */
class DeleteContractByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteContractByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $DeleteContractByIdResult = null;
    /**
     * Constructor method for DeleteContractByIdResponse
     * @uses DeleteContractByIdResponse::setDeleteContractByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $deleteContractByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $deleteContractByIdResult = null)
    {
        $this
            ->setDeleteContractByIdResult($deleteContractByIdResult);
    }
    /**
     * Get DeleteContractByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteContractByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult
    {
        return $this->DeleteContractByIdResult ?? null;
    }
    /**
     * Set DeleteContractByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $deleteContractByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\DeleteContractByIdResponse
     */
    public function setDeleteContractByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $deleteContractByIdResult = null): self
    {
        if (is_null($deleteContractByIdResult) || (is_array($deleteContractByIdResult) && empty($deleteContractByIdResult))) {
            unset($this->DeleteContractByIdResult);
        } else {
            $this->DeleteContractByIdResult = $deleteContractByIdResult;
        }
        
        return $this;
    }
}
