<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReturnPurchaseInvoiceById StructType
 * @subpackage Structs
 */
class FindReturnPurchaseInvoiceById extends AbstractStructBase
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
     * The retPurchInvoiceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $retPurchInvoiceId = null;
    /**
     * Constructor method for FindReturnPurchaseInvoiceById
     * @uses FindReturnPurchaseInvoiceById::setUserName()
     * @uses FindReturnPurchaseInvoiceById::setPassword()
     * @uses FindReturnPurchaseInvoiceById::setRetPurchInvoiceId()
     * @param string $userName
     * @param string $password
     * @param string $retPurchInvoiceId
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $retPurchInvoiceId = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setRetPurchInvoiceId($retPurchInvoiceId);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceById
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceById
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
     * Get retPurchInvoiceId value
     * @return string|null
     */
    public function getRetPurchInvoiceId(): ?string
    {
        return $this->retPurchInvoiceId;
    }
    /**
     * Set retPurchInvoiceId value
     * @param string $retPurchInvoiceId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Invoice\StructType\FindReturnPurchaseInvoiceById
     */
    public function setRetPurchInvoiceId(?string $retPurchInvoiceId = null): self
    {
        // validation for constraint: string
        if (!is_null($retPurchInvoiceId) && !is_string($retPurchInvoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retPurchInvoiceId, true), gettype($retPurchInvoiceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($retPurchInvoiceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $retPurchInvoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($retPurchInvoiceId, true)), __LINE__);
        }
        $this->retPurchInvoiceId = $retPurchInvoiceId;
        
        return $this;
    }
}
