<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePersonResponse StructType
 * @subpackage Structs
 */
class SavePersonResponse extends AbstractStructBase
{
    /**
     * The SavePersonResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $SavePersonResult = null;
    /**
     * Constructor method for SavePersonResponse
     * @uses SavePersonResponse::setSavePersonResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $savePersonResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $savePersonResult = null)
    {
        $this
            ->setSavePersonResult($savePersonResult);
    }
    /**
     * Get SavePersonResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult|null
     */
    public function getSavePersonResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult
    {
        return $this->SavePersonResult ?? null;
    }
    /**
     * Set SavePersonResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $savePersonResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SavePersonResponse
     */
    public function setSavePersonResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\SaveCrmObjectResult $savePersonResult = null): self
    {
        if (is_null($savePersonResult) || (is_array($savePersonResult) && empty($savePersonResult))) {
            unset($this->SavePersonResult);
        } else {
            $this->SavePersonResult = $savePersonResult;
        }
        
        return $this;
    }
}
