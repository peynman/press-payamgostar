<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTicketHistory StructType
 * @subpackage Structs
 */
class SaveTicketHistory extends AbstractStructBase
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
     * The UserId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $UserId = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The Files
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $Files = null;
    /**
     * Constructor method for SaveTicketHistory
     * @uses SaveTicketHistory::setUsername()
     * @uses SaveTicketHistory::setPassword()
     * @uses SaveTicketHistory::setTicketId()
     * @uses SaveTicketHistory::setUserId()
     * @uses SaveTicketHistory::setContent()
     * @uses SaveTicketHistory::setFiles()
     * @param string $username
     * @param string $password
     * @param string $ticketId
     * @param string $userId
     * @param string $content
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $files
     */
    public function __construct(?string $username = null, ?string $password = null, ?string $ticketId = null, ?string $userId = null, ?string $content = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $files = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setTicketId($ticketId)
            ->setUserId($userId)
            ->setContent($content)
            ->setFiles($files);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory
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
     * Get UserId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userId, true)), __LINE__);
        }
        $this->UserId = $userId;
        
        return $this;
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content ?? null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->Content);
        } else {
            $this->Content = $content;
        }
        
        return $this;
    }
    /**
     * Get Files value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo|null
     */
    public function getFiles(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo
    {
        return $this->Files ?? null;
    }
    /**
     * Set Files value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $files
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\SaveTicketHistory
     */
    public function setFiles(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $files = null): self
    {
        if (is_null($files) || (is_array($files) && empty($files))) {
            unset($this->Files);
        } else {
            $this->Files = $files;
        }
        
        return $this;
    }
}
