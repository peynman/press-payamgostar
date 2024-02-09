<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchIdentityResponse StructType
 * @subpackage Structs
 */
class SearchIdentityResponse extends AbstractStructBase
{
    /**
     * The SearchIdentityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $SearchIdentityResult = null;
    /**
     * Constructor method for SearchIdentityResponse
     * @uses SearchIdentityResponse::setSearchIdentityResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $searchIdentityResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $searchIdentityResult = null)
    {
        $this
            ->setSearchIdentityResult($searchIdentityResult);
    }
    /**
     * Get SearchIdentityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult|null
     */
    public function getSearchIdentityResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult
    {
        return $this->SearchIdentityResult ?? null;
    }
    /**
     * Set SearchIdentityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $searchIdentityResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SearchIdentityResponse
     */
    public function setSearchIdentityResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult $searchIdentityResult = null): self
    {
        if (is_null($searchIdentityResult) || (is_array($searchIdentityResult) && empty($searchIdentityResult))) {
            unset($this->SearchIdentityResult);
        } else {
            $this->SearchIdentityResult = $searchIdentityResult;
        }
        
        return $this;
    }
}
