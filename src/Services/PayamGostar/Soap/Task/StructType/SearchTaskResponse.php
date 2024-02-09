<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTaskResponse StructType
 * @subpackage Structs
 */
class SearchTaskResponse extends AbstractStructBase
{
    /**
     * The SearchTaskResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $SearchTaskResult = null;
    /**
     * Constructor method for SearchTaskResponse
     * @uses SearchTaskResponse::setSearchTaskResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $searchTaskResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $searchTaskResult = null)
    {
        $this
            ->setSearchTaskResult($searchTaskResult);
    }
    /**
     * Get SearchTaskResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult|null
     */
    public function getSearchTaskResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult
    {
        return $this->SearchTaskResult ?? null;
    }
    /**
     * Set SearchTaskResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $searchTaskResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\SearchTaskResponse
     */
    public function setSearchTaskResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Task\StructType\TaskInfoResult $searchTaskResult = null): self
    {
        if (is_null($searchTaskResult) || (is_array($searchTaskResult) && empty($searchTaskResult))) {
            unset($this->SearchTaskResult);
        } else {
            $this->SearchTaskResult = $searchTaskResult;
        }
        
        return $this;
    }
}
