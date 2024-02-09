<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContractResponse StructType
 * @subpackage Structs
 */
class SaveContractResponse extends AbstractStructBase
{
    /**
     * The SaveContractResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $SaveContractResult = null;
    /**
     * Constructor method for SaveContractResponse
     * @uses SaveContractResponse::setSaveContractResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $saveContractResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $saveContractResult = null)
    {
        $this
            ->setSaveContractResult($saveContractResult);
    }
    /**
     * Get SaveContractResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult|null
     */
    public function getSaveContractResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult
    {
        return $this->SaveContractResult ?? null;
    }
    /**
     * Set SaveContractResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $saveContractResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveContractResponse
     */
    public function setSaveContractResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\SaveCrmObjectResult $saveContractResult = null): self
    {
        if (is_null($saveContractResult) || (is_array($saveContractResult) && empty($saveContractResult))) {
            unset($this->SaveContractResult);
        } else {
            $this->SaveContractResult = $saveContractResult;
        }
        
        return $this;
    }
}
