<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTaskByIdResponse StructType
 * @subpackage Structs
 */
class DeleteTaskByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteTaskByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $DeleteTaskByIdResult = null;
    /**
     * Constructor method for DeleteTaskByIdResponse
     * @uses DeleteTaskByIdResponse::setDeleteTaskByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $deleteTaskByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $deleteTaskByIdResult = null)
    {
        $this
            ->setDeleteTaskByIdResult($deleteTaskByIdResult);
    }
    /**
     * Get DeleteTaskByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteTaskByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult
    {
        return $this->DeleteTaskByIdResult ?? null;
    }
    /**
     * Set DeleteTaskByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $deleteTaskByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\DeleteTaskByIdResponse
     */
    public function setDeleteTaskByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SaveCrmObjectResult $deleteTaskByIdResult = null): self
    {
        if (is_null($deleteTaskByIdResult) || (is_array($deleteTaskByIdResult) && empty($deleteTaskByIdResult))) {
            unset($this->DeleteTaskByIdResult);
        } else {
            $this->DeleteTaskByIdResult = $deleteTaskByIdResult;
        }
        
        return $this;
    }
}
