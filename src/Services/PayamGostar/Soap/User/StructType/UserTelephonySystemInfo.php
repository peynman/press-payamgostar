<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserTelephonySystemInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserTelephonySystemInfo
 * @subpackage Structs
 */
class UserTelephonySystemInfo extends OperationResult
{
    /**
     * The TelephonySystems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo $TelephonySystems = null;
    /**
     * Constructor method for UserTelephonySystemInfo
     * @uses UserTelephonySystemInfo::setTelephonySystems()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo $telephonySystems
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo $telephonySystems = null)
    {
        $this
            ->setTelephonySystems($telephonySystems);
    }
    /**
     * Get TelephonySystems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo|null
     */
    public function getTelephonySystems(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo
    {
        return $this->TelephonySystems ?? null;
    }
    /**
     * Set TelephonySystems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo $telephonySystems
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserTelephonySystemInfo
     */
    public function setTelephonySystems(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfTelephonySystemInfo $telephonySystems = null): self
    {
        if (is_null($telephonySystems) || (is_array($telephonySystems) && empty($telephonySystems))) {
            unset($this->TelephonySystems);
        } else {
            $this->TelephonySystems = $telephonySystems;
        }
        
        return $this;
    }
}
