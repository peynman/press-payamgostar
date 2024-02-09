<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveIdentityResponse StructType
 * @subpackage Structs
 */
class SaveIdentityResponse extends AbstractStructBase
{
    /**
     * The SaveIdentityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $SaveIdentityResult = null;
    /**
     * Constructor method for SaveIdentityResponse
     * @uses SaveIdentityResponse::setSaveIdentityResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $saveIdentityResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $saveIdentityResult = null)
    {
        $this
            ->setSaveIdentityResult($saveIdentityResult);
    }
    /**
     * Get SaveIdentityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult|null
     */
    public function getSaveIdentityResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult
    {
        return $this->SaveIdentityResult ?? null;
    }
    /**
     * Set SaveIdentityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $saveIdentityResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveIdentityResponse
     */
    public function setSaveIdentityResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\SaveCrmObjectResult $saveIdentityResult = null): self
    {
        if (is_null($saveIdentityResult) || (is_array($saveIdentityResult) && empty($saveIdentityResult))) {
            unset($this->SaveIdentityResult);
        } else {
            $this->SaveIdentityResult = $saveIdentityResult;
        }
        
        return $this;
    }
}
