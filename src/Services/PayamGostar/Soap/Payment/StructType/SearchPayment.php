<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPayment StructType
 * @subpackage Structs
 */
class SearchPayment extends AbstractStructBase
{
    /**
     * The userName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The query
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $query = null;
    /**
     * The crmObjectTypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $crmObjectTypeCode = null;
    /**
     * Constructor method for SearchPayment
     * @uses SearchPayment::setUserName()
     * @uses SearchPayment::setPassword()
     * @uses SearchPayment::setQuery()
     * @uses SearchPayment::setCrmObjectTypeCode()
     * @param string $userName
     * @param string $password
     * @param string $query
     * @param string $crmObjectTypeCode
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $query = null, ?string $crmObjectTypeCode = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setQuery($query)
            ->setCrmObjectTypeCode($crmObjectTypeCode);
    }
    /**
     * Get userName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName ?? null;
    }
    /**
     * Set userName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPayment
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->userName);
        } else {
            $this->userName = $userName;
        }
        
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPayment
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        
        return $this;
    }
    /**
     * Get query value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->query ?? null;
    }
    /**
     * Set query value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $query
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPayment
     */
    public function setQuery(?string $query = null): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        if (is_null($query) || (is_array($query) && empty($query))) {
            unset($this->query);
        } else {
            $this->query = $query;
        }
        
        return $this;
    }
    /**
     * Get crmObjectTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCrmObjectTypeCode(): ?string
    {
        return $this->crmObjectTypeCode ?? null;
    }
    /**
     * Set crmObjectTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $crmObjectTypeCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SearchPayment
     */
    public function setCrmObjectTypeCode(?string $crmObjectTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($crmObjectTypeCode) && !is_string($crmObjectTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmObjectTypeCode, true), gettype($crmObjectTypeCode)), __LINE__);
        }
        if (is_null($crmObjectTypeCode) || (is_array($crmObjectTypeCode) && empty($crmObjectTypeCode))) {
            unset($this->crmObjectTypeCode);
        } else {
            $this->crmObjectTypeCode = $crmObjectTypeCode;
        }
        
        return $this;
    }
}
