<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserGroupInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUserGroupInfo
 * @subpackage Arrays
 */
class ArrayOfUserGroupInfo extends AbstractStructArrayBase
{
    /**
     * The UserGroupInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo[]
     */
    protected ?array $UserGroupInfo = null;
    /**
     * Constructor method for ArrayOfUserGroupInfo
     * @uses ArrayOfUserGroupInfo::setUserGroupInfo()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo[] $userGroupInfo
     */
    public function __construct(?array $userGroupInfo = null)
    {
        $this
            ->setUserGroupInfo($userGroupInfo);
    }
    /**
     * Get UserGroupInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo[]
     */
    public function getUserGroupInfo(): ?array
    {
        return $this->UserGroupInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUserGroupInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserGroupInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserGroupInfoForArrayConstraintFromSetUserGroupInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserGroupInfoUserGroupInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserGroupInfoUserGroupInfoItem instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo) {
                $invalidValues[] = is_object($arrayOfUserGroupInfoUserGroupInfoItem) ? get_class($arrayOfUserGroupInfoUserGroupInfoItem) : sprintf('%s(%s)', gettype($arrayOfUserGroupInfoUserGroupInfoItem), var_export($arrayOfUserGroupInfoUserGroupInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserGroupInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserGroupInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo[] $userGroupInfo
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo
     */
    public function setUserGroupInfo(?array $userGroupInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($userGroupInfoArrayErrorMessage = self::validateUserGroupInfoForArrayConstraintFromSetUserGroupInfo($userGroupInfo))) {
            throw new InvalidArgumentException($userGroupInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($userGroupInfo) || (is_array($userGroupInfo) && empty($userGroupInfo))) {
            unset($this->UserGroupInfo);
        } else {
            $this->UserGroupInfo = $userGroupInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo|null
     */
    public function current(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo|null
     */
    public function item($index): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo|null
     */
    public function first(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo|null
     */
    public function last(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo|null
     */
    public function offsetGet($offset): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo $item
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserGroupInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo) {
            throw new InvalidArgumentException(sprintf('The UserGroupInfo property can only contain items of type \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserGroupInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserGroupInfo
     */
    public function getAttributeName(): string
    {
        return 'UserGroupInfo';
    }
}
