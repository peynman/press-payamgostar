<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindIdentityByIdResponse StructType
 * @subpackage Structs
 */
class FindIdentityByIdResponse extends AbstractStructBase
{
    /**
     * The FindIdentityByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $FindIdentityByIdResult = null;
    /**
     * Constructor method for FindIdentityByIdResponse
     * @uses FindIdentityByIdResponse::setFindIdentityByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByIdResult = null)
    {
        $this
            ->setFindIdentityByIdResult($findIdentityByIdResult);
    }
    /**
     * Get FindIdentityByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult|null
     */
    public function getFindIdentityByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult
    {
        return $this->FindIdentityByIdResult ?? null;
    }
    /**
     * Set FindIdentityByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByIdResponse
     */
    public function setFindIdentityByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByIdResult = null): self
    {
        if (is_null($findIdentityByIdResult) || (is_array($findIdentityByIdResult) && empty($findIdentityByIdResult))) {
            unset($this->FindIdentityByIdResult);
        } else {
            $this->FindIdentityByIdResult = $findIdentityByIdResult;
        }
        
        return $this;
    }
}
