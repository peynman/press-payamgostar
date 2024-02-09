<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePersonByIdResponse StructType
 * @subpackage Structs
 */
class DeletePersonByIdResponse extends AbstractStructBase
{
    /**
     * The DeletePersonByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $DeletePersonByIdResult = null;
    /**
     * Constructor method for DeletePersonByIdResponse
     * @uses DeletePersonByIdResponse::setDeletePersonByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $deletePersonByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $deletePersonByIdResult = null)
    {
        $this
            ->setDeletePersonByIdResult($deletePersonByIdResult);
    }
    /**
     * Get DeletePersonByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult|null
     */
    public function getDeletePersonByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult
    {
        return $this->DeletePersonByIdResult ?? null;
    }
    /**
     * Set DeletePersonByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $deletePersonByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\DeletePersonByIdResponse
     */
    public function setDeletePersonByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $deletePersonByIdResult = null): self
    {
        if (is_null($deletePersonByIdResult) || (is_array($deletePersonByIdResult) && empty($deletePersonByIdResult))) {
            unset($this->DeletePersonByIdResult);
        } else {
            $this->DeletePersonByIdResult = $deletePersonByIdResult;
        }
        
        return $this;
    }
}
