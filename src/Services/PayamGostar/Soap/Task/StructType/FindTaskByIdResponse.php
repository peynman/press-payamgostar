<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindTaskByIdResponse StructType
 * @subpackage Structs
 */
class FindTaskByIdResponse extends AbstractStructBase
{
    /**
     * The FindTaskByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $FindTaskByIdResult = null;
    /**
     * Constructor method for FindTaskByIdResponse
     * @uses FindTaskByIdResponse::setFindTaskByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $findTaskByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $findTaskByIdResult = null)
    {
        $this
            ->setFindTaskByIdResult($findTaskByIdResult);
    }
    /**
     * Get FindTaskByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult|null
     */
    public function getFindTaskByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult
    {
        return $this->FindTaskByIdResult ?? null;
    }
    /**
     * Set FindTaskByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $findTaskByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\FindTaskByIdResponse
     */
    public function setFindTaskByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $findTaskByIdResult = null): self
    {
        if (is_null($findTaskByIdResult) || (is_array($findTaskByIdResult) && empty($findTaskByIdResult))) {
            unset($this->FindTaskByIdResult);
        } else {
            $this->FindTaskByIdResult = $findTaskByIdResult;
        }
        
        return $this;
    }
}
