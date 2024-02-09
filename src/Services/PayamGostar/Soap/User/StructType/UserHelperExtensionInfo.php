<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserHelperExtensionInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserHelperExtensionInfo
 * @subpackage Structs
 */
class UserHelperExtensionInfo extends OperationResult
{
    /**
     * The HelperExtension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $HelperExtension = null;
    /**
     * Constructor method for UserHelperExtensionInfo
     * @uses UserHelperExtensionInfo::setHelperExtension()
     * @param string $helperExtension
     */
    public function __construct(?string $helperExtension = null)
    {
        $this
            ->setHelperExtension($helperExtension);
    }
    /**
     * Get HelperExtension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHelperExtension(): ?string
    {
        return $this->HelperExtension ?? null;
    }
    /**
     * Set HelperExtension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $helperExtension
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserHelperExtensionInfo
     */
    public function setHelperExtension(?string $helperExtension = null): self
    {
        // validation for constraint: string
        if (!is_null($helperExtension) && !is_string($helperExtension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helperExtension, true), gettype($helperExtension)), __LINE__);
        }
        if (is_null($helperExtension) || (is_array($helperExtension) && empty($helperExtension))) {
            unset($this->HelperExtension);
        } else {
            $this->HelperExtension = $helperExtension;
        }
        
        return $this;
    }
}
