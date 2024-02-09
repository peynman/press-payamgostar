<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchContractResponse StructType
 * @subpackage Structs
 */
class SearchContractResponse extends AbstractStructBase
{
    /**
     * The SearchContractResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $SearchContractResult = null;
    /**
     * Constructor method for SearchContractResponse
     * @uses SearchContractResponse::setSearchContractResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $searchContractResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $searchContractResult = null)
    {
        $this
            ->setSearchContractResult($searchContractResult);
    }
    /**
     * Get SearchContractResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult|null
     */
    public function getSearchContractResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult
    {
        return $this->SearchContractResult ?? null;
    }
    /**
     * Set SearchContractResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $searchContractResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SearchContractResponse
     */
    public function setSearchContractResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $searchContractResult = null): self
    {
        if (is_null($searchContractResult) || (is_array($searchContractResult) && empty($searchContractResult))) {
            unset($this->SearchContractResult);
        } else {
            $this->SearchContractResult = $searchContractResult;
        }
        
        return $this;
    }
}
