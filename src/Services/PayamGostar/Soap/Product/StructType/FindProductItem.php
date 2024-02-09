<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductItem StructType
 * @subpackage Structs
 */
class FindProductItem extends AbstractStructBase
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
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The serialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $serialNumber = null;
    /**
     * Constructor method for FindProductItem
     * @uses FindProductItem::setUserName()
     * @uses FindProductItem::setPassword()
     * @uses FindProductItem::setProductCode()
     * @uses FindProductItem::setSerialNumber()
     * @param string $userName
     * @param string $password
     * @param string $productCode
     * @param string $serialNumber
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $productCode = null, ?string $serialNumber = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setProductCode($productCode)
            ->setSerialNumber($serialNumber);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItem
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItem
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
     * Get productCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode ?? null;
    }
    /**
     * Set productCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItem
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        if (is_null($productCode) || (is_array($productCode) && empty($productCode))) {
            unset($this->productCode);
        } else {
            $this->productCode = $productCode;
        }
        
        return $this;
    }
    /**
     * Get serialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSerialNumber(): ?string
    {
        return $this->serialNumber ?? null;
    }
    /**
     * Set serialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serialNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\FindProductItem
     */
    public function setSerialNumber(?string $serialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serialNumber, true), gettype($serialNumber)), __LINE__);
        }
        if (is_null($serialNumber) || (is_array($serialNumber) && empty($serialNumber))) {
            unset($this->serialNumber);
        } else {
            $this->serialNumber = $serialNumber;
        }
        
        return $this;
    }
}
