<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberedContractResponse StructType
 * @subpackage Structs
 */
class NumberedContractResponse extends AbstractStructBase
{
    /**
     * The NumberedContractResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $NumberedContractResult = null;
    /**
     * Constructor method for NumberedContractResponse
     * @uses NumberedContractResponse::setNumberedContractResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $numberedContractResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $numberedContractResult = null)
    {
        $this
            ->setNumberedContractResult($numberedContractResult);
    }
    /**
     * Get NumberedContractResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    public function getNumberedContractResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult
    {
        return $this->NumberedContractResult ?? null;
    }
    /**
     * Set NumberedContractResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $numberedContractResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\NumberedContractResponse
     */
    public function setNumberedContractResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $numberedContractResult = null): self
    {
        if (is_null($numberedContractResult) || (is_array($numberedContractResult) && empty($numberedContractResult))) {
            unset($this->NumberedContractResult);
        } else {
            $this->NumberedContractResult = $numberedContractResult;
        }
        
        return $this;
    }
}
