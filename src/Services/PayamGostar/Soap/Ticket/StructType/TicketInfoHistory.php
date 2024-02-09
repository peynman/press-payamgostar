<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfoHistory StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketInfoHistory
 * @subpackage Structs
 */
class TicketInfoHistory extends AbstractStructBase
{
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The FileInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $FileInfo = null;
    /**
     * The FromSrc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FromSrc = null;
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MessageType = null;
    /**
     * The SenderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SenderName = null;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $Time = null;
    /**
     * Constructor method for TicketInfoHistory
     * @uses TicketInfoHistory::setContent()
     * @uses TicketInfoHistory::setDate()
     * @uses TicketInfoHistory::setDescription()
     * @uses TicketInfoHistory::setFileInfo()
     * @uses TicketInfoHistory::setFromSrc()
     * @uses TicketInfoHistory::setMessageType()
     * @uses TicketInfoHistory::setSenderName()
     * @uses TicketInfoHistory::setTime()
     * @param string $content
     * @param string $date
     * @param string $description
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $fileInfo
     * @param string $fromSrc
     * @param int $messageType
     * @param string $senderName
     * @param string $time
     */
    public function __construct(?string $content = null, ?string $date = null, ?string $description = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $fileInfo = null, ?string $fromSrc = null, ?int $messageType = null, ?string $senderName = null, ?string $time = null)
    {
        $this
            ->setContent($content)
            ->setDate($date)
            ->setDescription($description)
            ->setFileInfo($fileInfo)
            ->setFromSrc($fromSrc)
            ->setMessageType($messageType)
            ->setSenderName($senderName)
            ->setTime($time);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
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
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get FileInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo|null
     */
    public function getFileInfo(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo
    {
        return $this->FileInfo ?? null;
    }
    /**
     * Set FileInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $fileInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setFileInfo(?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo $fileInfo = null): self
    {
        if (is_null($fileInfo) || (is_array($fileInfo) && empty($fileInfo))) {
            unset($this->FileInfo);
        } else {
            $this->FileInfo = $fileInfo;
        }
        
        return $this;
    }
    /**
     * Get FromSrc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFromSrc(): ?string
    {
        return $this->FromSrc ?? null;
    }
    /**
     * Set FromSrc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fromSrc
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setFromSrc(?string $fromSrc = null): self
    {
        // validation for constraint: string
        if (!is_null($fromSrc) && !is_string($fromSrc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromSrc, true), gettype($fromSrc)), __LINE__);
        }
        if (is_null($fromSrc) || (is_array($fromSrc) && empty($fromSrc))) {
            unset($this->FromSrc);
        } else {
            $this->FromSrc = $fromSrc;
        }
        
        return $this;
    }
    /**
     * Get MessageType value
     * @return int|null
     */
    public function getMessageType(): ?int
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @param int $messageType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setMessageType(?int $messageType = null): self
    {
        // validation for constraint: int
        if (!is_null($messageType) && !(is_int($messageType) || ctype_digit($messageType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->MessageType = $messageType;
        
        return $this;
    }
    /**
     * Get SenderName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderName(): ?string
    {
        return $this->SenderName ?? null;
    }
    /**
     * Set SenderName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setSenderName(?string $senderName = null): self
    {
        // validation for constraint: string
        if (!is_null($senderName) && !is_string($senderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderName, true), gettype($senderName)), __LINE__);
        }
        if (is_null($senderName) || (is_array($senderName) && empty($senderName))) {
            unset($this->SenderName);
        } else {
            $this->SenderName = $senderName;
        }
        
        return $this;
    }
    /**
     * Get Time value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->Time ?? null;
    }
    /**
     * Set Time value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $time
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\TicketInfoHistory
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($time) && false === mb_strpos((string) $time, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $time)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($time, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($time) && false !== mb_strpos((string) $time, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $time)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($time, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($time) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($time, true)), __LINE__);
        }
        if (is_null($time) || (is_array($time) && empty($time))) {
            unset($this->Time);
        } else {
            $this->Time = $time;
        }
        
        return $this;
    }
}
