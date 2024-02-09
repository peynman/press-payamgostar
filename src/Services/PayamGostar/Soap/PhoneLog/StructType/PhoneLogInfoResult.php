<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneLogInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhoneLogInfoResult
 * @subpackage Structs
 */
class PhoneLogInfoResult extends OperationResult
{
    /**
     * The PhoneLogInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo $PhoneLogInfo = null;
    /**
     * The PhoneLogInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo $PhoneLogInfoList = null;
    /**
     * Constructor method for PhoneLogInfoResult
     * @uses PhoneLogInfoResult::setPhoneLogInfo()
     * @uses PhoneLogInfoResult::setPhoneLogInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo $phoneLogInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo $phoneLogInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo $phoneLogInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo $phoneLogInfoList = null)
    {
        $this
            ->setPhoneLogInfo($phoneLogInfo)
            ->setPhoneLogInfoList($phoneLogInfoList);
    }
    /**
     * Get PhoneLogInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo|null
     */
    public function getPhoneLogInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo
    {
        return $this->PhoneLogInfo ?? null;
    }
    /**
     * Set PhoneLogInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo $phoneLogInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult
     */
    public function setPhoneLogInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfo $phoneLogInfo = null): self
    {
        if (is_null($phoneLogInfo) || (is_array($phoneLogInfo) && empty($phoneLogInfo))) {
            unset($this->PhoneLogInfo);
        } else {
            $this->PhoneLogInfo = $phoneLogInfo;
        }
        
        return $this;
    }
    /**
     * Get PhoneLogInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo|null
     */
    public function getPhoneLogInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo
    {
        return $this->PhoneLogInfoList ?? null;
    }
    /**
     * Set PhoneLogInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo $phoneLogInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\PhoneLogInfoResult
     */
    public function setPhoneLogInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\ArrayType\ArrayOfPhoneLogInfo $phoneLogInfoList = null): self
    {
        if (is_null($phoneLogInfoList) || (is_array($phoneLogInfoList) && empty($phoneLogInfoList))) {
            unset($this->PhoneLogInfoList);
        } else {
            $this->PhoneLogInfoList = $phoneLogInfoList;
        }
        
        return $this;
    }
}
