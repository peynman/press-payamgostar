<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContractInfoResult
 * @subpackage Structs
 */
class ContractInfoResult extends OperationResult
{
    /**
     * The ContractInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo $ContractInfo = null;
    /**
     * The ContractInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo $ContractInfoList = null;
    /**
     * Constructor method for ContractInfoResult
     * @uses ContractInfoResult::setContractInfo()
     * @uses ContractInfoResult::setContractInfoList()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo $contractInfo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo $contractInfoList
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo $contractInfo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo $contractInfoList = null)
    {
        $this
            ->setContractInfo($contractInfo)
            ->setContractInfoList($contractInfoList);
    }
    /**
     * Get ContractInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo|null
     */
    public function getContractInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo
    {
        return $this->ContractInfo ?? null;
    }
    /**
     * Set ContractInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo $contractInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult
     */
    public function setContractInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfo $contractInfo = null): self
    {
        if (is_null($contractInfo) || (is_array($contractInfo) && empty($contractInfo))) {
            unset($this->ContractInfo);
        } else {
            $this->ContractInfo = $contractInfo;
        }
        
        return $this;
    }
    /**
     * Get ContractInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo|null
     */
    public function getContractInfoList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo
    {
        return $this->ContractInfoList ?? null;
    }
    /**
     * Set ContractInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo $contractInfoList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\StructType\ContractInfoResult
     */
    public function setContractInfoList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Contract\ArrayType\ArrayOfContractInfo $contractInfoList = null): self
    {
        if (is_null($contractInfoList) || (is_array($contractInfoList) && empty($contractInfoList))) {
            unset($this->ContractInfoList);
        } else {
            $this->ContractInfoList = $contractInfoList;
        }
        
        return $this;
    }
}
