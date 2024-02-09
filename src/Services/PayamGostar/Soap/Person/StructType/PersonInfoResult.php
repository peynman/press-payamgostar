<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PersonInfoResult
 * @subpackage Structs
 */
class PersonInfoResult extends OperationResult
{
    /**
     * The PersonInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo $PersonInfo = null;
    /**
     * The PersonInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo $PersonInfoList = null;
    /**
     * Constructor method for PersonInfoResult
     * @uses PersonInfoResult::setPersonInfo()
     * @uses PersonInfoResult::setPersonInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo $personInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo $personInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo $personInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo $personInfoList = null)
    {
        $this
            ->setPersonInfo($personInfo)
            ->setPersonInfoList($personInfoList);
    }
    /**
     * Get PersonInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo|null
     */
    public function getPersonInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo
    {
        return $this->PersonInfo ?? null;
    }
    /**
     * Set PersonInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo $personInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult
     */
    public function setPersonInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfo $personInfo = null): self
    {
        if (is_null($personInfo) || (is_array($personInfo) && empty($personInfo))) {
            unset($this->PersonInfo);
        } else {
            $this->PersonInfo = $personInfo;
        }
        
        return $this;
    }
    /**
     * Get PersonInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo|null
     */
    public function getPersonInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo
    {
        return $this->PersonInfoList ?? null;
    }
    /**
     * Set PersonInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo $personInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Person\StructType\PersonInfoResult
     */
    public function setPersonInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Person\ArrayType\ArrayOfPersonInfo $personInfoList = null): self
    {
        if (is_null($personInfoList) || (is_array($personInfoList) && empty($personInfoList))) {
            unset($this->PersonInfoList);
        } else {
            $this->PersonInfoList = $personInfoList;
        }
        
        return $this;
    }
}
