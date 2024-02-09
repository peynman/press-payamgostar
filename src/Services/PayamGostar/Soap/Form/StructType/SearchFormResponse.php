<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFormResponse StructType
 * @subpackage Structs
 */
class SearchFormResponse extends AbstractStructBase
{
    /**
     * The SearchFormResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $SearchFormResult = null;
    /**
     * Constructor method for SearchFormResponse
     * @uses SearchFormResponse::setSearchFormResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $searchFormResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $searchFormResult = null)
    {
        $this
            ->setSearchFormResult($searchFormResult);
    }
    /**
     * Get SearchFormResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult|null
     */
    public function getSearchFormResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult
    {
        return $this->SearchFormResult ?? null;
    }
    /**
     * Set SearchFormResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $searchFormResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\SearchFormResponse
     */
    public function setSearchFormResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult $searchFormResult = null): self
    {
        if (is_null($searchFormResult) || (is_array($searchFormResult) && empty($searchFormResult))) {
            unset($this->SearchFormResult);
        } else {
            $this->SearchFormResult = $searchFormResult;
        }
        
        return $this;
    }
}
