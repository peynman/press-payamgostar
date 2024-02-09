<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindIdentityByPhoneNumberResponse StructType
 * @subpackage Structs
 */
class FindIdentityByPhoneNumberResponse extends AbstractStructBase
{
    /**
     * The FindIdentityByPhoneNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $FindIdentityByPhoneNumberResult = null;
    /**
     * Constructor method for FindIdentityByPhoneNumberResponse
     * @uses FindIdentityByPhoneNumberResponse::setFindIdentityByPhoneNumberResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByPhoneNumberResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByPhoneNumberResult = null)
    {
        $this
            ->setFindIdentityByPhoneNumberResult($findIdentityByPhoneNumberResult);
    }
    /**
     * Get FindIdentityByPhoneNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult|null
     */
    public function getFindIdentityByPhoneNumberResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult
    {
        return $this->FindIdentityByPhoneNumberResult ?? null;
    }
    /**
     * Set FindIdentityByPhoneNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByPhoneNumberResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\FindIdentityByPhoneNumberResponse
     */
    public function setFindIdentityByPhoneNumberResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $findIdentityByPhoneNumberResult = null): self
    {
        if (is_null($findIdentityByPhoneNumberResult) || (is_array($findIdentityByPhoneNumberResult) && empty($findIdentityByPhoneNumberResult))) {
            unset($this->FindIdentityByPhoneNumberResult);
        } else {
            $this->FindIdentityByPhoneNumberResult = $findIdentityByPhoneNumberResult;
        }
        
        return $this;
    }
}
