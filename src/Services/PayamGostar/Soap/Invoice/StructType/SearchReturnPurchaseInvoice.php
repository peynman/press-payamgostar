<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchReturnPurchaseInvoice StructType
 * @subpackage Structs
 */
class SearchReturnPurchaseInvoice extends AbstractStructBase
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
     * The typeKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $typeKey = null;
    /**
     * The query
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $query = null;
    /**
     * Constructor method for SearchReturnPurchaseInvoice
     * @uses SearchReturnPurchaseInvoice::setUserName()
     * @uses SearchReturnPurchaseInvoice::setPassword()
     * @uses SearchReturnPurchaseInvoice::setTypeKey()
     * @uses SearchReturnPurchaseInvoice::setQuery()
     * @param string $userName
     * @param string $password
     * @param string $typeKey
     * @param string $query
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $typeKey = null, ?string $query = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setTypeKey($typeKey)
            ->setQuery($query);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoice
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoice
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
     * Get typeKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeKey(): ?string
    {
        return $this->typeKey ?? null;
    }
    /**
     * Set typeKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeKey
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoice
     */
    public function setTypeKey(?string $typeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($typeKey) && !is_string($typeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeKey, true), gettype($typeKey)), __LINE__);
        }
        if (is_null($typeKey) || (is_array($typeKey) && empty($typeKey))) {
            unset($this->typeKey);
        } else {
            $this->typeKey = $typeKey;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SearchReturnPurchaseInvoice
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
}
