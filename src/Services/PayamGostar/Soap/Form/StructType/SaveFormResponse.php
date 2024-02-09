<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFormResponse StructType
 * @subpackage Structs
 */
class SaveFormResponse extends AbstractStructBase
{
    /**
     * The SaveFormResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $SaveFormResult = null;
    /**
     * Constructor method for SaveFormResponse
     * @uses SaveFormResponse::setSaveFormResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $saveFormResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $saveFormResult = null)
    {
        $this
            ->setSaveFormResult($saveFormResult);
    }
    /**
     * Get SaveFormResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult|null
     */
    public function getSaveFormResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult
    {
        return $this->SaveFormResult ?? null;
    }
    /**
     * Set SaveFormResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $saveFormResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveFormResponse
     */
    public function setSaveFormResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $saveFormResult = null): self
    {
        if (is_null($saveFormResult) || (is_array($saveFormResult) && empty($saveFormResult))) {
            unset($this->SaveFormResult);
        } else {
            $this->SaveFormResult = $saveFormResult;
        }
        
        return $this;
    }
}
