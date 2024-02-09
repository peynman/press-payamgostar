<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBusinessNoteResponse StructType
 * @subpackage Structs
 */
class GetBusinessNoteResponse extends AbstractStructBase
{
    /**
     * The GetBusinessNoteResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult $GetBusinessNoteResult = null;
    /**
     * Constructor method for GetBusinessNoteResponse
     * @uses GetBusinessNoteResponse::setGetBusinessNoteResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult $getBusinessNoteResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult $getBusinessNoteResult = null)
    {
        $this
            ->setGetBusinessNoteResult($getBusinessNoteResult);
    }
    /**
     * Get GetBusinessNoteResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult|null
     */
    public function getGetBusinessNoteResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult
    {
        return $this->GetBusinessNoteResult ?? null;
    }
    /**
     * Set GetBusinessNoteResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult $getBusinessNoteResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\GetBusinessNoteResponse
     */
    public function setGetBusinessNoteResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult $getBusinessNoteResult = null): self
    {
        if (is_null($getBusinessNoteResult) || (is_array($getBusinessNoteResult) && empty($getBusinessNoteResult))) {
            unset($this->GetBusinessNoteResult);
        } else {
            $this->GetBusinessNoteResult = $getBusinessNoteResult;
        }
        
        return $this;
    }
}
