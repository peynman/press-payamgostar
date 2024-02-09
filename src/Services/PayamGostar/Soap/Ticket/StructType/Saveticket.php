<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Saveticket StructType
 * @subpackage Structs
 */
class Saveticket extends AbstractStructBase
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
     * The ticketInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo = null;
    /**
     * Constructor method for Saveticket
     * @uses Saveticket::setUserName()
     * @uses Saveticket::setPassword()
     * @uses Saveticket::setTicketInfo()
     * @param string $userName
     * @param string $password
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo
     */
    public function __construct(?string $userName = null, ?string $password = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setTicketInfo($ticketInfo);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\Saveticket
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\Saveticket
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
     * Get ticketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo|null
     */
    public function getTicketInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo
    {
        return $this->ticketInfo ?? null;
    }
    /**
     * Set ticketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\Saveticket
     */
    public function setTicketInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfo $ticketInfo = null): self
    {
        if (is_null($ticketInfo) || (is_array($ticketInfo) && empty($ticketInfo))) {
            unset($this->ticketInfo);
        } else {
            $this->ticketInfo = $ticketInfo;
        }
        
        return $this;
    }
}
