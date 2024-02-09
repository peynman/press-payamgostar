<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTaskResponse StructType
 * @subpackage Structs
 */
class SaveTaskResponse extends AbstractStructBase
{
    /**
     * The SaveTaskResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $SaveTaskResult = null;
    /**
     * Constructor method for SaveTaskResponse
     * @uses SaveTaskResponse::setSaveTaskResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $saveTaskResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $saveTaskResult = null)
    {
        $this
            ->setSaveTaskResult($saveTaskResult);
    }
    /**
     * Get SaveTaskResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult|null
     */
    public function getSaveTaskResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult
    {
        return $this->SaveTaskResult ?? null;
    }
    /**
     * Set SaveTaskResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $saveTaskResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveTaskResponse
     */
    public function setSaveTaskResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $saveTaskResult = null): self
    {
        if (is_null($saveTaskResult) || (is_array($saveTaskResult) && empty($saveTaskResult))) {
            unset($this->SaveTaskResult);
        } else {
            $this->SaveTaskResult = $saveTaskResult;
        }
        
        return $this;
    }
}
