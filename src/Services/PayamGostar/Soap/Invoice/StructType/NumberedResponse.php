<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberedResponse StructType
 * @subpackage Structs
 */
class NumberedResponse extends AbstractStructBase
{
    /**
     * The NumberedResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $NumberedResult = null;
    /**
     * Constructor method for NumberedResponse
     * @uses NumberedResponse::setNumberedResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $numberedResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $numberedResult = null)
    {
        $this
            ->setNumberedResult($numberedResult);
    }
    /**
     * Get NumberedResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult|null
     */
    public function getNumberedResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult
    {
        return $this->NumberedResult ?? null;
    }
    /**
     * Set NumberedResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $numberedResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\NumberedResponse
     */
    public function setNumberedResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveCrmObjectResult $numberedResult = null): self
    {
        if (is_null($numberedResult) || (is_array($numberedResult) && empty($numberedResult))) {
            unset($this->NumberedResult);
        } else {
            $this->NumberedResult = $numberedResult;
        }
        
        return $this;
    }
}
