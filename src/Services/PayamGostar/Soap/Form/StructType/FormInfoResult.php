<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FormInfoResult
 * @subpackage Structs
 */
class FormInfoResult extends OperationResult
{
    /**
     * The FormInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo $FormInfo = null;
    /**
     * The FormInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo $FormInfoList = null;
    /**
     * Constructor method for FormInfoResult
     * @uses FormInfoResult::setFormInfo()
     * @uses FormInfoResult::setFormInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo $formInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo $formInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo $formInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo $formInfoList = null)
    {
        $this
            ->setFormInfo($formInfo)
            ->setFormInfoList($formInfoList);
    }
    /**
     * Get FormInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo|null
     */
    public function getFormInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo
    {
        return $this->FormInfo ?? null;
    }
    /**
     * Set FormInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo $formInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult
     */
    public function setFormInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfo $formInfo = null): self
    {
        if (is_null($formInfo) || (is_array($formInfo) && empty($formInfo))) {
            unset($this->FormInfo);
        } else {
            $this->FormInfo = $formInfo;
        }
        
        return $this;
    }
    /**
     * Get FormInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo|null
     */
    public function getFormInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo
    {
        return $this->FormInfoList ?? null;
    }
    /**
     * Set FormInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo $formInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Form\StructType\FormInfoResult
     */
    public function setFormInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Form\ArrayType\ArrayOfFormInfo $formInfoList = null): self
    {
        if (is_null($formInfoList) || (is_array($formInfoList) && empty($formInfoList))) {
            unset($this->FormInfoList);
        } else {
            $this->FormInfoList = $formInfoList;
        }
        
        return $this;
    }
}
