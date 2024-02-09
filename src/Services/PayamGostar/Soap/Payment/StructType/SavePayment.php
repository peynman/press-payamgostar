<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePayment StructType
 * @subpackage Structs
 */
class SavePayment extends AbstractStructBase
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
     * The paymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo = null;
    /**
     * Constructor method for SavePayment
     * @uses SavePayment::setUserName()
     * @uses SavePayment::setPassword()
     * @uses SavePayment::setPaymentInfo()
     * @param string $userName
     * @param string $password
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo
     */
    public function __construct(?string $userName = null, ?string $password = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setPaymentInfo($paymentInfo);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePayment
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePayment
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
     * Get paymentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo|null
     */
    public function getPaymentInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
    {
        return $this->paymentInfo ?? null;
    }
    /**
     * Set paymentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\SavePayment
     */
    public function setPaymentInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo $paymentInfo = null): self
    {
        if (is_null($paymentInfo) || (is_array($paymentInfo) && empty($paymentInfo))) {
            unset($this->paymentInfo);
        } else {
            $this->paymentInfo = $paymentInfo;
        }
        
        return $this;
    }
}
