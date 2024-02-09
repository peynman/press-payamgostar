<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePhoneLogByIdResponse StructType
 * @subpackage Structs
 */
class DeletePhoneLogByIdResponse extends AbstractStructBase
{
    /**
     * The DeletePhoneLogByIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult $DeletePhoneLogByIdResult = null;
    /**
     * Constructor method for DeletePhoneLogByIdResponse
     * @uses DeletePhoneLogByIdResponse::setDeletePhoneLogByIdResult()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult $deletePhoneLogByIdResult
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult $deletePhoneLogByIdResult = null)
    {
        $this
            ->setDeletePhoneLogByIdResult($deletePhoneLogByIdResult);
    }
    /**
     * Get DeletePhoneLogByIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult|null
     */
    public function getDeletePhoneLogByIdResult(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult
    {
        return $this->DeletePhoneLogByIdResult ?? null;
    }
    /**
     * Set DeletePhoneLogByIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult $deletePhoneLogByIdResult
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\DeletePhoneLogByIdResponse
     */
    public function setDeletePhoneLogByIdResult(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult $deletePhoneLogByIdResult = null): self
    {
        if (is_null($deletePhoneLogByIdResult) || (is_array($deletePhoneLogByIdResult) && empty($deletePhoneLogByIdResult))) {
            unset($this->DeletePhoneLogByIdResult);
        } else {
            $this->DeletePhoneLogByIdResult = $deletePhoneLogByIdResult;
        }
        
        return $this;
    }
}
