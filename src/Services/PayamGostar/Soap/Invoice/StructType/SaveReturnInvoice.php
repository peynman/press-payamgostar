<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveReturnInvoice StructType
 * @subpackage Structs
 */
class SaveReturnInvoice extends AbstractStructBase
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
     * The returnInvoiceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo $returnInvoiceInfo = null;
    /**
     * Constructor method for SaveReturnInvoice
     * @uses SaveReturnInvoice::setUserName()
     * @uses SaveReturnInvoice::setPassword()
     * @uses SaveReturnInvoice::setReturnInvoiceInfo()
     * @param string $userName
     * @param string $password
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo $returnInvoiceInfo
     */
    public function __construct(?string $userName = null, ?string $password = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo $returnInvoiceInfo = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setReturnInvoiceInfo($returnInvoiceInfo);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoice
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoice
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
     * Get returnInvoiceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo|null
     */
    public function getReturnInvoiceInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo
    {
        return $this->returnInvoiceInfo ?? null;
    }
    /**
     * Set returnInvoiceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo $returnInvoiceInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\SaveReturnInvoice
     */
    public function setReturnInvoiceInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\ReturnInvoiceInfo $returnInvoiceInfo = null): self
    {
        if (is_null($returnInvoiceInfo) || (is_array($returnInvoiceInfo) && empty($returnInvoiceInfo))) {
            unset($this->returnInvoiceInfo);
        } else {
            $this->returnInvoiceInfo = $returnInvoiceInfo;
        }
        
        return $this;
    }
}
