<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentInfo
 * @subpackage Structs
 */
class PaymentInfo extends BaseBillableObjectInfo
{
    /**
     * The BranchCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BranchCode = null;
    /**
     * The ChequeBank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ChequeBank = null;
    /**
     * The ChequeNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ChequeNo = null;
    /**
     * The CrmPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CrmPaymentType = null;
    /**
     * The IsPayed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsPayed = null;
    /**
     * The MoneyAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MoneyAccount = null;
    /**
     * The PayDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PayDate = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PaymentType = null;
    /**
     * The ReceiptCardNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ReceiptCardNo = null;
    /**
     * The RefNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RefNo = null;
    /**
     * The RelatedInvoiceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo $RelatedInvoiceNumber = null;
    /**
     * The SettledDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SettledDate = null;
    /**
     * Constructor method for PaymentInfo
     * @uses PaymentInfo::setBranchCode()
     * @uses PaymentInfo::setChequeBank()
     * @uses PaymentInfo::setChequeNo()
     * @uses PaymentInfo::setCrmPaymentType()
     * @uses PaymentInfo::setIsPayed()
     * @uses PaymentInfo::setMoneyAccount()
     * @uses PaymentInfo::setPayDate()
     * @uses PaymentInfo::setPaymentMethod()
     * @uses PaymentInfo::setPaymentType()
     * @uses PaymentInfo::setReceiptCardNo()
     * @uses PaymentInfo::setRefNo()
     * @uses PaymentInfo::setRelatedInvoiceNumber()
     * @uses PaymentInfo::setSettledDate()
     * @param string $branchCode
     * @param string $chequeBank
     * @param string $chequeNo
     * @param string $crmPaymentType
     * @param bool $isPayed
     * @param string $moneyAccount
     * @param string $payDate
     * @param string $paymentMethod
     * @param string $paymentType
     * @param string $receiptCardNo
     * @param string $refNo
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo $relatedInvoiceNumber
     * @param string $settledDate
     */
    public function __construct(?string $branchCode = null, ?string $chequeBank = null, ?string $chequeNo = null, ?string $crmPaymentType = null, ?bool $isPayed = null, ?string $moneyAccount = null, ?string $payDate = null, ?string $paymentMethod = null, ?string $paymentType = null, ?string $receiptCardNo = null, ?string $refNo = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo $relatedInvoiceNumber = null, ?string $settledDate = null)
    {
        $this
            ->setBranchCode($branchCode)
            ->setChequeBank($chequeBank)
            ->setChequeNo($chequeNo)
            ->setCrmPaymentType($crmPaymentType)
            ->setIsPayed($isPayed)
            ->setMoneyAccount($moneyAccount)
            ->setPayDate($payDate)
            ->setPaymentMethod($paymentMethod)
            ->setPaymentType($paymentType)
            ->setReceiptCardNo($receiptCardNo)
            ->setRefNo($refNo)
            ->setRelatedInvoiceNumber($relatedInvoiceNumber)
            ->setSettledDate($settledDate);
    }
    /**
     * Get BranchCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBranchCode(): ?string
    {
        return $this->BranchCode ?? null;
    }
    /**
     * Set BranchCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $branchCode
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setBranchCode(?string $branchCode = null): self
    {
        // validation for constraint: string
        if (!is_null($branchCode) && !is_string($branchCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($branchCode, true), gettype($branchCode)), __LINE__);
        }
        if (is_null($branchCode) || (is_array($branchCode) && empty($branchCode))) {
            unset($this->BranchCode);
        } else {
            $this->BranchCode = $branchCode;
        }
        
        return $this;
    }
    /**
     * Get ChequeBank value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChequeBank(): ?string
    {
        return $this->ChequeBank ?? null;
    }
    /**
     * Set ChequeBank value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $chequeBank
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setChequeBank(?string $chequeBank = null): self
    {
        // validation for constraint: string
        if (!is_null($chequeBank) && !is_string($chequeBank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chequeBank, true), gettype($chequeBank)), __LINE__);
        }
        if (is_null($chequeBank) || (is_array($chequeBank) && empty($chequeBank))) {
            unset($this->ChequeBank);
        } else {
            $this->ChequeBank = $chequeBank;
        }
        
        return $this;
    }
    /**
     * Get ChequeNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChequeNo(): ?string
    {
        return $this->ChequeNo ?? null;
    }
    /**
     * Set ChequeNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $chequeNo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setChequeNo(?string $chequeNo = null): self
    {
        // validation for constraint: string
        if (!is_null($chequeNo) && !is_string($chequeNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chequeNo, true), gettype($chequeNo)), __LINE__);
        }
        if (is_null($chequeNo) || (is_array($chequeNo) && empty($chequeNo))) {
            unset($this->ChequeNo);
        } else {
            $this->ChequeNo = $chequeNo;
        }
        
        return $this;
    }
    /**
     * Get CrmPaymentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCrmPaymentType(): ?string
    {
        return $this->CrmPaymentType ?? null;
    }
    /**
     * Set CrmPaymentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $crmPaymentType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setCrmPaymentType(?string $crmPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($crmPaymentType) && !is_string($crmPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmPaymentType, true), gettype($crmPaymentType)), __LINE__);
        }
        if (is_null($crmPaymentType) || (is_array($crmPaymentType) && empty($crmPaymentType))) {
            unset($this->CrmPaymentType);
        } else {
            $this->CrmPaymentType = $crmPaymentType;
        }
        
        return $this;
    }
    /**
     * Get IsPayed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsPayed(): ?bool
    {
        return $this->IsPayed ?? null;
    }
    /**
     * Set IsPayed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isPayed
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setIsPayed(?bool $isPayed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPayed) && !is_bool($isPayed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPayed, true), gettype($isPayed)), __LINE__);
        }
        if (is_null($isPayed) || (is_array($isPayed) && empty($isPayed))) {
            unset($this->IsPayed);
        } else {
            $this->IsPayed = $isPayed;
        }
        
        return $this;
    }
    /**
     * Get MoneyAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMoneyAccount(): ?string
    {
        return $this->MoneyAccount ?? null;
    }
    /**
     * Set MoneyAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moneyAccount
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setMoneyAccount(?string $moneyAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($moneyAccount) && !is_string($moneyAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moneyAccount, true), gettype($moneyAccount)), __LINE__);
        }
        if (is_null($moneyAccount) || (is_array($moneyAccount) && empty($moneyAccount))) {
            unset($this->MoneyAccount);
        } else {
            $this->MoneyAccount = $moneyAccount;
        }
        
        return $this;
    }
    /**
     * Get PayDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPayDate(): ?string
    {
        return $this->PayDate ?? null;
    }
    /**
     * Set PayDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $payDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setPayDate(?string $payDate = null): self
    {
        // validation for constraint: string
        if (!is_null($payDate) && !is_string($payDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payDate, true), gettype($payDate)), __LINE__);
        }
        if (is_null($payDate) || (is_array($payDate) && empty($payDate))) {
            unset($this->PayDate);
        } else {
            $this->PayDate = $payDate;
        }
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod ?? null;
    }
    /**
     * Set PaymentMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentMethod
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        if (is_null($paymentMethod) || (is_array($paymentMethod) && empty($paymentMethod))) {
            unset($this->PaymentMethod);
        } else {
            $this->PaymentMethod = $paymentMethod;
        }
        
        return $this;
    }
    /**
     * Get PaymentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->PaymentType ?? null;
    }
    /**
     * Set PaymentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        if (is_null($paymentType) || (is_array($paymentType) && empty($paymentType))) {
            unset($this->PaymentType);
        } else {
            $this->PaymentType = $paymentType;
        }
        
        return $this;
    }
    /**
     * Get ReceiptCardNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiptCardNo(): ?string
    {
        return $this->ReceiptCardNo ?? null;
    }
    /**
     * Set ReceiptCardNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiptCardNo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setReceiptCardNo(?string $receiptCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptCardNo) && !is_string($receiptCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptCardNo, true), gettype($receiptCardNo)), __LINE__);
        }
        if (is_null($receiptCardNo) || (is_array($receiptCardNo) && empty($receiptCardNo))) {
            unset($this->ReceiptCardNo);
        } else {
            $this->ReceiptCardNo = $receiptCardNo;
        }
        
        return $this;
    }
    /**
     * Get RefNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefNo(): ?string
    {
        return $this->RefNo ?? null;
    }
    /**
     * Set RefNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refNo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setRefNo(?string $refNo = null): self
    {
        // validation for constraint: string
        if (!is_null($refNo) && !is_string($refNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refNo, true), gettype($refNo)), __LINE__);
        }
        if (is_null($refNo) || (is_array($refNo) && empty($refNo))) {
            unset($this->RefNo);
        } else {
            $this->RefNo = $refNo;
        }
        
        return $this;
    }
    /**
     * Get RelatedInvoiceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo|null
     */
    public function getRelatedInvoiceNumber(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo
    {
        return $this->RelatedInvoiceNumber ?? null;
    }
    /**
     * Set RelatedInvoiceNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo $relatedInvoiceNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setRelatedInvoiceNumber(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\RelatedInvoiceInfo $relatedInvoiceNumber = null): self
    {
        if (is_null($relatedInvoiceNumber) || (is_array($relatedInvoiceNumber) && empty($relatedInvoiceNumber))) {
            unset($this->RelatedInvoiceNumber);
        } else {
            $this->RelatedInvoiceNumber = $relatedInvoiceNumber;
        }
        
        return $this;
    }
    /**
     * Get SettledDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSettledDate(): ?string
    {
        return $this->SettledDate ?? null;
    }
    /**
     * Set SettledDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $settledDate
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Payment\StructType\PaymentInfo
     */
    public function setSettledDate(?string $settledDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settledDate) && !is_string($settledDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settledDate, true), gettype($settledDate)), __LINE__);
        }
        if (is_null($settledDate) || (is_array($settledDate) && empty($settledDate))) {
            unset($this->SettledDate);
        } else {
            $this->SettledDate = $settledDate;
        }
        
        return $this;
    }
}
