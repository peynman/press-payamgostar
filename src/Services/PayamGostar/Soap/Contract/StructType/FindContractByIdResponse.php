<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindContractByIdResponse StructType
 * @subpackage Structs
 */
class FindContractByIdResponse extends AbstractStructBase
{
    /**
     * The FindContractByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $FindContractByIdResult = null;
    /**
     * Constructor method for FindContractByIdResponse
     * @uses FindContractByIdResponse::setFindContractByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $findContractByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $findContractByIdResult = null)
    {
        $this
            ->setFindContractByIdResult($findContractByIdResult);
    }
    /**
     * Get FindContractByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult|null
     */
    public function getFindContractByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult
    {
        return $this->FindContractByIdResult ?? null;
    }
    /**
     * Set FindContractByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $findContractByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\FindContractByIdResponse
     */
    public function setFindContractByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult $findContractByIdResult = null): self
    {
        if (is_null($findContractByIdResult) || (is_array($findContractByIdResult) && empty($findContractByIdResult))) {
            unset($this->FindContractByIdResult);
        } else {
            $this->FindContractByIdResult = $findContractByIdResult;
        }
        
        return $this;
    }
}
