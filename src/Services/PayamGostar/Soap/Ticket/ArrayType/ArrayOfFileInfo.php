<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFileInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFileInfo
 * @subpackage Arrays
 */
class ArrayOfFileInfo extends AbstractStructArrayBase
{
    /**
     * The FileInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo[]
     */
    protected ?array $FileInfo = null;
    /**
     * Constructor method for ArrayOfFileInfo
     * @uses ArrayOfFileInfo::setFileInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo[] $fileInfo
     */
    public function __construct(?array $fileInfo = null)
    {
        $this
            ->setFileInfo($fileInfo);
    }
    /**
     * Get FileInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo[]
     */
    public function getFileInfo(): ?array
    {
        return $this->FileInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFileInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileInfoForArrayConstraintFromSetFileInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFileInfoFileInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileInfoFileInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo) {
                $invalidValues[] = is_object($arrayOfFileInfoFileInfoItem) ? get_class($arrayOfFileInfoFileInfoItem) : sprintf('%s(%s)', gettype($arrayOfFileInfoFileInfoItem), var_export($arrayOfFileInfoFileInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FileInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FileInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo[] $fileInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo
     */
    public function setFileInfo(?array $fileInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($fileInfoArrayErrorMessage = self::validateFileInfoForArrayConstraintFromSetFileInfo($fileInfo))) {
            throw new InvalidArgumentException($fileInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($fileInfo) || (is_array($fileInfo) && empty($fileInfo))) {
            unset($this->FileInfo);
        } else {
            $this->FileInfo = $fileInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\ArrayType\ArrayOfFileInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo) {
            throw new InvalidArgumentException(sprintf('The FileInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\Ticket\StructType\FileInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileInfo
     */
    public function getAttributeName(): string
    {
        return 'FileInfo';
    }
}
