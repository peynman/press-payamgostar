<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFormByIdResponse StructType
 * @subpackage Structs
 */
class DeleteFormByIdResponse extends AbstractStructBase
{
    /**
     * The DeleteFormByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $DeleteFormByIdResult = null;
    /**
     * Constructor method for DeleteFormByIdResponse
     * @uses DeleteFormByIdResponse::setDeleteFormByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $deleteFormByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $deleteFormByIdResult = null)
    {
        $this
            ->setDeleteFormByIdResult($deleteFormByIdResult);
    }
    /**
     * Get DeleteFormByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult|null
     */
    public function getDeleteFormByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult
    {
        return $this->DeleteFormByIdResult ?? null;
    }
    /**
     * Set DeleteFormByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $deleteFormByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\DeleteFormByIdResponse
     */
    public function setDeleteFormByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SaveCrmObjectResult $deleteFormByIdResult = null): self
    {
        if (is_null($deleteFormByIdResult) || (is_array($deleteFormByIdResult) && empty($deleteFormByIdResult))) {
            unset($this->DeleteFormByIdResult);
        } else {
            $this->DeleteFormByIdResult = $deleteFormByIdResult;
        }
        
        return $this;
    }
}
