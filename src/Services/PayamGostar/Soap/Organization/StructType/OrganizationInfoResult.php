<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrganizationInfoResult
 * @subpackage Structs
 */
class OrganizationInfoResult extends OperationResult
{
    /**
     * The OrganizationInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo $OrganizationInfo = null;
    /**
     * The OrganizationInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo $OrganizationInfoList = null;
    /**
     * Constructor method for OrganizationInfoResult
     * @uses OrganizationInfoResult::setOrganizationInfo()
     * @uses OrganizationInfoResult::setOrganizationInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo $organizationInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo $organizationInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo $organizationInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo $organizationInfoList = null)
    {
        $this
            ->setOrganizationInfo($organizationInfo)
            ->setOrganizationInfoList($organizationInfoList);
    }
    /**
     * Get OrganizationInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo|null
     */
    public function getOrganizationInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo
    {
        return $this->OrganizationInfo ?? null;
    }
    /**
     * Set OrganizationInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo $organizationInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult
     */
    public function setOrganizationInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfo $organizationInfo = null): self
    {
        if (is_null($organizationInfo) || (is_array($organizationInfo) && empty($organizationInfo))) {
            unset($this->OrganizationInfo);
        } else {
            $this->OrganizationInfo = $organizationInfo;
        }
        
        return $this;
    }
    /**
     * Get OrganizationInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo|null
     */
    public function getOrganizationInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo
    {
        return $this->OrganizationInfoList ?? null;
    }
    /**
     * Set OrganizationInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo $organizationInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\StructType\OrganizationInfoResult
     */
    public function setOrganizationInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Organization\ArrayType\ArrayOfOrganizationInfo $organizationInfoList = null): self
    {
        if (is_null($organizationInfoList) || (is_array($organizationInfoList) && empty($organizationInfoList))) {
            unset($this->OrganizationInfoList);
        } else {
            $this->OrganizationInfoList = $organizationInfoList;
        }
        
        return $this;
    }
}
