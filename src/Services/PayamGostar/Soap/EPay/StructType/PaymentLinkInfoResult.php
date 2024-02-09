<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentLinkInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentLinkInfoResult
 * @subpackage Structs
 */
class PaymentLinkInfoResult extends OperationResult
{
    /**
     * The PaymentLink
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PaymentLink = null;
    /**
     * Constructor method for PaymentLinkInfoResult
     * @uses PaymentLinkInfoResult::setPaymentLink()
     * @param string $paymentLink
     */
    public function __construct(?string $paymentLink = null)
    {
        $this
            ->setPaymentLink($paymentLink);
    }
    /**
     * Get PaymentLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentLink(): ?string
    {
        return $this->PaymentLink ?? null;
    }
    /**
     * Set PaymentLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentLink
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\EPay\StructType\PaymentLinkInfoResult
     */
    public function setPaymentLink(?string $paymentLink = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentLink) && !is_string($paymentLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentLink, true), gettype($paymentLink)), __LINE__);
        }
        if (is_null($paymentLink) || (is_array($paymentLink) && empty($paymentLink))) {
            unset($this->PaymentLink);
        } else {
            $this->PaymentLink = $paymentLink;
        }
        
        return $this;
    }
}
