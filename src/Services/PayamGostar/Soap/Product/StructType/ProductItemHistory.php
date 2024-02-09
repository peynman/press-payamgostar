<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductItemHistory StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductItemHistory
 * @subpackage Structs
 */
class ProductItemHistory extends AbstractStructBase
{
    /**
     * The DateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTime = null;
    /**
     * The DestinationInventoryId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DestinationInventoryId = null;
    /**
     * The DestinationInventoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DestinationInventoryName = null;
    /**
     * The InventoryTransactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $InventoryTransactionType = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The ReceiverDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ReceiverDesc = null;
    /**
     * The ReceiverIdentityId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ReceiverIdentityId = null;
    /**
     * The ReceiverUserId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ReceiverUserId = null;
    /**
     * The SerialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $SerialNumber = null;
    /**
     * The ShipperDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShipperDesc = null;
    /**
     * The ShipperIdentityId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ShipperIdentityId = null;
    /**
     * The ShipperUserId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ShipperUserId = null;
    /**
     * The SourceInventoryId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SourceInventoryId = null;
    /**
     * The SourceInventoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SourceInventoryName = null;
    /**
     * The TransactionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $TransactionStatus = null;
    /**
     * Constructor method for ProductItemHistory
     * @uses ProductItemHistory::setDateTime()
     * @uses ProductItemHistory::setDestinationInventoryId()
     * @uses ProductItemHistory::setDestinationInventoryName()
     * @uses ProductItemHistory::setInventoryTransactionType()
     * @uses ProductItemHistory::setNumber()
     * @uses ProductItemHistory::setReceiverDesc()
     * @uses ProductItemHistory::setReceiverIdentityId()
     * @uses ProductItemHistory::setReceiverUserId()
     * @uses ProductItemHistory::setSerialNumber()
     * @uses ProductItemHistory::setShipperDesc()
     * @uses ProductItemHistory::setShipperIdentityId()
     * @uses ProductItemHistory::setShipperUserId()
     * @uses ProductItemHistory::setSourceInventoryId()
     * @uses ProductItemHistory::setSourceInventoryName()
     * @uses ProductItemHistory::setTransactionStatus()
     * @param string $dateTime
     * @param string $destinationInventoryId
     * @param string $destinationInventoryName
     * @param array|string $inventoryTransactionType
     * @param string $number
     * @param string $receiverDesc
     * @param string $receiverIdentityId
     * @param string $receiverUserId
     * @param int $serialNumber
     * @param string $shipperDesc
     * @param string $shipperIdentityId
     * @param string $shipperUserId
     * @param string $sourceInventoryId
     * @param string $sourceInventoryName
     * @param array|string $transactionStatus
     */
    public function __construct(?string $dateTime = null, ?string $destinationInventoryId = null, ?string $destinationInventoryName = null, $inventoryTransactionType = null, ?string $number = null, ?string $receiverDesc = null, ?string $receiverIdentityId = null, ?string $receiverUserId = null, ?int $serialNumber = null, ?string $shipperDesc = null, ?string $shipperIdentityId = null, ?string $shipperUserId = null, ?string $sourceInventoryId = null, ?string $sourceInventoryName = null, $transactionStatus = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setDestinationInventoryId($destinationInventoryId)
            ->setDestinationInventoryName($destinationInventoryName)
            ->setInventoryTransactionType($inventoryTransactionType)
            ->setNumber($number)
            ->setReceiverDesc($receiverDesc)
            ->setReceiverIdentityId($receiverIdentityId)
            ->setReceiverUserId($receiverUserId)
            ->setSerialNumber($serialNumber)
            ->setShipperDesc($shipperDesc)
            ->setShipperIdentityId($shipperIdentityId)
            ->setShipperUserId($shipperUserId)
            ->setSourceInventoryId($sourceInventoryId)
            ->setSourceInventoryName($sourceInventoryName)
            ->setTransactionStatus($transactionStatus);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime(): ?string
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setDateTime(?string $dateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        
        return $this;
    }
    /**
     * Get DestinationInventoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestinationInventoryId(): ?string
    {
        return $this->DestinationInventoryId ?? null;
    }
    /**
     * Set DestinationInventoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destinationInventoryId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setDestinationInventoryId(?string $destinationInventoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationInventoryId) && !is_string($destinationInventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationInventoryId, true), gettype($destinationInventoryId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($destinationInventoryId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $destinationInventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($destinationInventoryId, true)), __LINE__);
        }
        if (is_null($destinationInventoryId) || (is_array($destinationInventoryId) && empty($destinationInventoryId))) {
            unset($this->DestinationInventoryId);
        } else {
            $this->DestinationInventoryId = $destinationInventoryId;
        }
        
        return $this;
    }
    /**
     * Get DestinationInventoryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestinationInventoryName(): ?string
    {
        return $this->DestinationInventoryName ?? null;
    }
    /**
     * Set DestinationInventoryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destinationInventoryName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setDestinationInventoryName(?string $destinationInventoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationInventoryName) && !is_string($destinationInventoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationInventoryName, true), gettype($destinationInventoryName)), __LINE__);
        }
        if (is_null($destinationInventoryName) || (is_array($destinationInventoryName) && empty($destinationInventoryName))) {
            unset($this->DestinationInventoryName);
        } else {
            $this->DestinationInventoryName = $destinationInventoryName;
        }
        
        return $this;
    }
    /**
     * Get InventoryTransactionType value
     * @return string
     */
    public function getInventoryTransactionType(): ?string
    {
        return $this->InventoryTransactionType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInventoryTransactionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInventoryTransactionType method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInventoryTransactionTypeForListConstraintFromSetInventoryTransactionType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productItemHistoryInventoryTransactionTypeItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\InventoryTransactionType::valueIsValid($productItemHistoryInventoryTransactionTypeItem)) {
                $invalidValues[] = is_object($productItemHistoryInventoryTransactionTypeItem) ? get_class($productItemHistoryInventoryTransactionTypeItem) : sprintf('%s(%s)', gettype($productItemHistoryInventoryTransactionTypeItem), var_export($productItemHistoryInventoryTransactionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\InventoryTransactionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\InventoryTransactionType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InventoryTransactionType value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\InventoryTransactionType::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\InventoryTransactionType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $inventoryTransactionType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setInventoryTransactionType($inventoryTransactionType = null): self
    {
        // validation for constraint: list
        if ('' !== ($inventoryTransactionTypeArrayErrorMessage = self::validateInventoryTransactionTypeForListConstraintFromSetInventoryTransactionType(is_string($inventoryTransactionType) ? explode(' ', $inventoryTransactionType) : $inventoryTransactionType))) {
            throw new InvalidArgumentException($inventoryTransactionTypeArrayErrorMessage, __LINE__);
        }
        $this->InventoryTransactionType = is_array($inventoryTransactionType) ? implode(' ', $inventoryTransactionType) : $inventoryTransactionType;
        
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number ?? null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        
        return $this;
    }
    /**
     * Get ReceiverDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiverDesc(): ?string
    {
        return $this->ReceiverDesc ?? null;
    }
    /**
     * Set ReceiverDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiverDesc
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setReceiverDesc(?string $receiverDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($receiverDesc) && !is_string($receiverDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverDesc, true), gettype($receiverDesc)), __LINE__);
        }
        if (is_null($receiverDesc) || (is_array($receiverDesc) && empty($receiverDesc))) {
            unset($this->ReceiverDesc);
        } else {
            $this->ReceiverDesc = $receiverDesc;
        }
        
        return $this;
    }
    /**
     * Get ReceiverIdentityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiverIdentityId(): ?string
    {
        return $this->ReceiverIdentityId ?? null;
    }
    /**
     * Set ReceiverIdentityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiverIdentityId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setReceiverIdentityId(?string $receiverIdentityId = null): self
    {
        // validation for constraint: string
        if (!is_null($receiverIdentityId) && !is_string($receiverIdentityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverIdentityId, true), gettype($receiverIdentityId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($receiverIdentityId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $receiverIdentityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($receiverIdentityId, true)), __LINE__);
        }
        if (is_null($receiverIdentityId) || (is_array($receiverIdentityId) && empty($receiverIdentityId))) {
            unset($this->ReceiverIdentityId);
        } else {
            $this->ReceiverIdentityId = $receiverIdentityId;
        }
        
        return $this;
    }
    /**
     * Get ReceiverUserId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiverUserId(): ?string
    {
        return $this->ReceiverUserId ?? null;
    }
    /**
     * Set ReceiverUserId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiverUserId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setReceiverUserId(?string $receiverUserId = null): self
    {
        // validation for constraint: string
        if (!is_null($receiverUserId) && !is_string($receiverUserId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverUserId, true), gettype($receiverUserId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($receiverUserId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $receiverUserId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($receiverUserId, true)), __LINE__);
        }
        if (is_null($receiverUserId) || (is_array($receiverUserId) && empty($receiverUserId))) {
            unset($this->ReceiverUserId);
        } else {
            $this->ReceiverUserId = $receiverUserId;
        }
        
        return $this;
    }
    /**
     * Get SerialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSerialNumber(): ?int
    {
        return $this->SerialNumber ?? null;
    }
    /**
     * Set SerialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $serialNumber
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setSerialNumber(?int $serialNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($serialNumber) && !(is_int($serialNumber) || ctype_digit($serialNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($serialNumber, true), gettype($serialNumber)), __LINE__);
        }
        if (is_null($serialNumber) || (is_array($serialNumber) && empty($serialNumber))) {
            unset($this->SerialNumber);
        } else {
            $this->SerialNumber = $serialNumber;
        }
        
        return $this;
    }
    /**
     * Get ShipperDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipperDesc(): ?string
    {
        return $this->ShipperDesc ?? null;
    }
    /**
     * Set ShipperDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipperDesc
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setShipperDesc(?string $shipperDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperDesc) && !is_string($shipperDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperDesc, true), gettype($shipperDesc)), __LINE__);
        }
        if (is_null($shipperDesc) || (is_array($shipperDesc) && empty($shipperDesc))) {
            unset($this->ShipperDesc);
        } else {
            $this->ShipperDesc = $shipperDesc;
        }
        
        return $this;
    }
    /**
     * Get ShipperIdentityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipperIdentityId(): ?string
    {
        return $this->ShipperIdentityId ?? null;
    }
    /**
     * Set ShipperIdentityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipperIdentityId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setShipperIdentityId(?string $shipperIdentityId = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperIdentityId) && !is_string($shipperIdentityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperIdentityId, true), gettype($shipperIdentityId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($shipperIdentityId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $shipperIdentityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($shipperIdentityId, true)), __LINE__);
        }
        if (is_null($shipperIdentityId) || (is_array($shipperIdentityId) && empty($shipperIdentityId))) {
            unset($this->ShipperIdentityId);
        } else {
            $this->ShipperIdentityId = $shipperIdentityId;
        }
        
        return $this;
    }
    /**
     * Get ShipperUserId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipperUserId(): ?string
    {
        return $this->ShipperUserId ?? null;
    }
    /**
     * Set ShipperUserId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipperUserId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setShipperUserId(?string $shipperUserId = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperUserId) && !is_string($shipperUserId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperUserId, true), gettype($shipperUserId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($shipperUserId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $shipperUserId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($shipperUserId, true)), __LINE__);
        }
        if (is_null($shipperUserId) || (is_array($shipperUserId) && empty($shipperUserId))) {
            unset($this->ShipperUserId);
        } else {
            $this->ShipperUserId = $shipperUserId;
        }
        
        return $this;
    }
    /**
     * Get SourceInventoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceInventoryId(): ?string
    {
        return $this->SourceInventoryId ?? null;
    }
    /**
     * Set SourceInventoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceInventoryId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setSourceInventoryId(?string $sourceInventoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceInventoryId) && !is_string($sourceInventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceInventoryId, true), gettype($sourceInventoryId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($sourceInventoryId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $sourceInventoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($sourceInventoryId, true)), __LINE__);
        }
        if (is_null($sourceInventoryId) || (is_array($sourceInventoryId) && empty($sourceInventoryId))) {
            unset($this->SourceInventoryId);
        } else {
            $this->SourceInventoryId = $sourceInventoryId;
        }
        
        return $this;
    }
    /**
     * Get SourceInventoryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceInventoryName(): ?string
    {
        return $this->SourceInventoryName ?? null;
    }
    /**
     * Set SourceInventoryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceInventoryName
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setSourceInventoryName(?string $sourceInventoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceInventoryName) && !is_string($sourceInventoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceInventoryName, true), gettype($sourceInventoryName)), __LINE__);
        }
        if (is_null($sourceInventoryName) || (is_array($sourceInventoryName) && empty($sourceInventoryName))) {
            unset($this->SourceInventoryName);
        } else {
            $this->SourceInventoryName = $sourceInventoryName;
        }
        
        return $this;
    }
    /**
     * Get TransactionStatus value
     * @return string
     */
    public function getTransactionStatus(): ?string
    {
        return $this->TransactionStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTransactionStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransactionStatus method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionStatusForListConstraintFromSetTransactionStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productItemHistoryTransactionStatusItem) {
            // validation for constraint: enumeration
            if (!\Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\TransactionStatus::valueIsValid($productItemHistoryTransactionStatusItem)) {
                $invalidValues[] = is_object($productItemHistoryTransactionStatusItem) ? get_class($productItemHistoryTransactionStatusItem) : sprintf('%s(%s)', gettype($productItemHistoryTransactionStatusItem), var_export($productItemHistoryTransactionStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\TransactionStatus', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\TransactionStatus::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TransactionStatus value
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\TransactionStatus::valueIsValid()
     * @uses \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\EnumType\TransactionStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $transactionStatus
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\ProductItemHistory
     */
    public function setTransactionStatus($transactionStatus = null): self
    {
        // validation for constraint: list
        if ('' !== ($transactionStatusArrayErrorMessage = self::validateTransactionStatusForListConstraintFromSetTransactionStatus(is_string($transactionStatus) ? explode(' ', $transactionStatus) : $transactionStatus))) {
            throw new InvalidArgumentException($transactionStatusArrayErrorMessage, __LINE__);
        }
        $this->TransactionStatus = is_array($transactionStatus) ? implode(' ', $transactionStatus) : $transactionStatus;
        
        return $this;
    }
}
