<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteIdentityByIdResponse StructType
 * @subpackage Structs
 */
class DeleteIdentityByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteIdentityByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $DeleteIdentityByIdResult = null;
    /**
     * Constructor method for DeleteIdentityByIdResponse
     * @uses DeleteIdentityByIdResponse::setDeleteIdentityByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $deleteIdentityByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $deleteIdentityByIdResult = null)
    {
        $this
            ->setDeleteIdentityByIdResult($deleteIdentityByIdResult);
    }
    /**
     * Get DeleteIdentityByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteIdentityByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult
    {
        return $this->DeleteIdentityByIdResult ?? null;
    }
    /**
     * Set DeleteIdentityByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $deleteIdentityByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\DeleteIdentityByIdResponse
     */
    public function setDeleteIdentityByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $deleteIdentityByIdResult = null): self
    {
        if (is_null($deleteIdentityByIdResult) || (is_array($deleteIdentityByIdResult) && empty($deleteIdentityByIdResult))) {
            unset($this->DeleteIdentityByIdResult);
        } else {
            $this->DeleteIdentityByIdResult = $deleteIdentityByIdResult;
        }
        
        return $this;
    }
}
