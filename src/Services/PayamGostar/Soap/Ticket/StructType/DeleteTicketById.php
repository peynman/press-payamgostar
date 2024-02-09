<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTicketById StructType
 * @subpackage Structs
 */
class DeleteTicketById extends AbstractStructBase
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
     * The ticketId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ticketId = null;
    /**
     * The deleteOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $deleteOption = null;
    /**
     * Constructor method for DeleteTicketById
     * @uses DeleteTicketById::setUserName()
     * @uses DeleteTicketById::setPassword()
     * @uses DeleteTicketById::setTicketId()
     * @uses DeleteTicketById::setDeleteOption()
     * @param string $userName
     * @param string $password
     * @param string $ticketId
     * @param array|string $deleteOption
     */
    public function __construct(?string $userName = null, ?string $password = null, ?string $ticketId = null, $deleteOption = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setTicketId($ticketId)
            ->setDeleteOption($deleteOption);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketById
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketById
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
     * Get ticketId value
     * @return string|null
     */
    public function getTicketId(): ?string
    {
        return $this->ticketId;
    }
    /**
     * Set ticketId value
     * @param string $ticketId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketById
     */
    public function setTicketId(?string $ticketId = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketId) && !is_string($ticketId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketId, true), gettype($ticketId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($ticketId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $ticketId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($ticketId, true)), __LINE__);
        }
        $this->ticketId = $ticketId;
        
        return $this;
    }
    /**
     * Get deleteOption value
     * @return string
     */
    public function getDeleteOption(): ?string
    {
        return $this->deleteOption;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDeleteOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteOption method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeleteOptionForListConstraintFromSetDeleteOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteTicketByIdDeleteOptionItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\EnumType\CrmObjectDeleteOption::valueIsValid($deleteTicketByIdDeleteOptionItem)) {
                $invalidValues[] = is_object($deleteTicketByIdDeleteOptionItem) ? get_class($deleteTicketByIdDeleteOptionItem) : sprintf('%s(%s)', gettype($deleteTicketByIdDeleteOptionItem), var_export($deleteTicketByIdDeleteOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\EnumType\CrmObjectDeleteOption', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\EnumType\CrmObjectDeleteOption::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set deleteOption value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\EnumType\CrmObjectDeleteOption::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\EnumType\CrmObjectDeleteOption::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $deleteOption
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\DeleteTicketById
     */
    public function setDeleteOption($deleteOption = null): self
    {
        // validation for constraint: list
        if ('' !== ($deleteOptionArrayErrorMessage = self::validateDeleteOptionForListConstraintFromSetDeleteOption(is_string($deleteOption) ? explode(' ', $deleteOption) : $deleteOption))) {
            throw new InvalidArgumentException($deleteOptionArrayErrorMessage, __LINE__);
        }
        $this->deleteOption = is_array($deleteOption) ? implode(' ', $deleteOption) : $deleteOption;
        
        return $this;
    }
}
