<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPersonResponse StructType
 * @subpackage Structs
 */
class SearchPersonResponse extends AbstractStructBase
{
    /**
     * The SearchPersonResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $SearchPersonResult = null;
    /**
     * Constructor method for SearchPersonResponse
     * @uses SearchPersonResponse::setSearchPersonResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $searchPersonResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $searchPersonResult = null)
    {
        $this
            ->setSearchPersonResult($searchPersonResult);
    }
    /**
     * Get SearchPersonResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult|null
     */
    public function getSearchPersonResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult
    {
        return $this->SearchPersonResult ?? null;
    }
    /**
     * Set SearchPersonResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $searchPersonResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SearchPersonResponse
     */
    public function setSearchPersonResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $searchPersonResult = null): self
    {
        if (is_null($searchPersonResult) || (is_array($searchPersonResult) && empty($searchPersonResult))) {
            unset($this->SearchPersonResult);
        } else {
            $this->SearchPersonResult = $searchPersonResult;
        }
        
        return $this;
    }
}
