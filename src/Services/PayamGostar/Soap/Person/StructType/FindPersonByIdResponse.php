<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPersonByIdResponse StructType
 * @subpackage Structs
 */
class FindPersonByIdResponse extends AbstractStructBase
{
    /**
     * The FindPersonByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $FindPersonByIdResult = null;
    /**
     * Constructor method for FindPersonByIdResponse
     * @uses FindPersonByIdResponse::setFindPersonByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $findPersonByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $findPersonByIdResult = null)
    {
        $this
            ->setFindPersonByIdResult($findPersonByIdResult);
    }
    /**
     * Get FindPersonByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult|null
     */
    public function getFindPersonByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult
    {
        return $this->FindPersonByIdResult ?? null;
    }
    /**
     * Set FindPersonByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $findPersonByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\FindPersonByIdResponse
     */
    public function setFindPersonByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult $findPersonByIdResult = null): self
    {
        if (is_null($findPersonByIdResult) || (is_array($findPersonByIdResult) && empty($findPersonByIdResult))) {
            unset($this->FindPersonByIdResult);
        } else {
            $this->FindPersonByIdResult = $findPersonByIdResult;
        }
        
        return $this;
    }
}
