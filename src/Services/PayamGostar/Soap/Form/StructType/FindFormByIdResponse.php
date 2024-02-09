<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindFormByIdResponse StructType
 * @subpackage Structs
 */
class FindFormByIdResponse extends AbstractStructBase
{
    /**
     * The FindFormByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $FindFormByIdResult = null;
    /**
     * Constructor method for FindFormByIdResponse
     * @uses FindFormByIdResponse::setFindFormByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $findFormByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $findFormByIdResult = null)
    {
        $this
            ->setFindFormByIdResult($findFormByIdResult);
    }
    /**
     * Get FindFormByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult|null
     */
    public function getFindFormByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult
    {
        return $this->FindFormByIdResult ?? null;
    }
    /**
     * Set FindFormByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $findFormByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FindFormByIdResponse
     */
    public function setFindFormByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $findFormByIdResult = null): self
    {
        if (is_null($findFormByIdResult) || (is_array($findFormByIdResult) && empty($findFormByIdResult))) {
            unset($this->FindFormByIdResult);
        } else {
            $this->FindFormByIdResult = $findFormByIdResult;
        }
        
        return $this;
    }
}
