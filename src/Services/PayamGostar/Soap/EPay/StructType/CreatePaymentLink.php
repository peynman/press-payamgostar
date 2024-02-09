<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePaymentLink StructType
 * @subpackage Structs
 */
class CreatePaymentLink extends AbstractStructBase
{
    /**
     * The username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The paymentLink
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo $paymentLink = null;
    /**
     * Constructor method for CreatePaymentLink
     * @uses CreatePaymentLink::setUsername()
     * @uses CreatePaymentLink::setPassword()
     * @uses CreatePaymentLink::setPaymentLink()
     * @param string $username
     * @param string $password
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo $paymentLink
     */
    public function __construct(?string $username = null, ?string $password = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo $paymentLink = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setPaymentLink($paymentLink);
    }
    /**
     * Get username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username ?? null;
    }
    /**
     * Set username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLink
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->username);
        } else {
            $this->username = $username;
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLink
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
     * Get paymentLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo|null
     */
    public function getPaymentLink(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo
    {
        return $this->paymentLink ?? null;
    }
    /**
     * Set paymentLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo $paymentLink
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\CreatePaymentLink
     */
    public function setPaymentLink(?\Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfo $paymentLink = null): self
    {
        if (is_null($paymentLink) || (is_array($paymentLink) && empty($paymentLink))) {
            unset($this->paymentLink);
        } else {
            $this->paymentLink = $paymentLink;
        }
        
        return $this;
    }
}
