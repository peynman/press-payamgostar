<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentityInfoResult
 * @subpackage Structs
 */
class IdentityInfoResult extends OperationResult
{
    /**
     * The IdentityInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $IdentityInfo = null;
    /**
     * The IdentityInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo $IdentityInfoList = null;
    /**
     * Constructor method for IdentityInfoResult
     * @uses IdentityInfoResult::setIdentityInfo()
     * @uses IdentityInfoResult::setIdentityInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identityInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo $identityInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identityInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo $identityInfoList = null)
    {
        $this
            ->setIdentityInfo($identityInfo)
            ->setIdentityInfoList($identityInfoList);
    }
    /**
     * Get IdentityInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo|null
     */
    public function getIdentityInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo
    {
        return $this->IdentityInfo ?? null;
    }
    /**
     * Set IdentityInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identityInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult
     */
    public function setIdentityInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfo $identityInfo = null): self
    {
        if (is_null($identityInfo) || (is_array($identityInfo) && empty($identityInfo))) {
            unset($this->IdentityInfo);
        } else {
            $this->IdentityInfo = $identityInfo;
        }
        
        return $this;
    }
    /**
     * Get IdentityInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo|null
     */
    public function getIdentityInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo
    {
        return $this->IdentityInfoList ?? null;
    }
    /**
     * Set IdentityInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo $identityInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\StructType\IdentityInfoResult
     */
    public function setIdentityInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Identity\ArrayType\ArrayOfIdentityInfo $identityInfoList = null): self
    {
        if (is_null($identityInfoList) || (is_array($identityInfoList) && empty($identityInfoList))) {
            unset($this->IdentityInfoList);
        } else {
            $this->IdentityInfoList = $identityInfoList;
        }
        
        return $this;
    }
}
