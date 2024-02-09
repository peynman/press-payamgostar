<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserInfoResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserInfoResult
 * @subpackage Structs
 */
class UserInfoResult extends OperationResult
{
    /**
     * The Users
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem $Users = null;
    /**
     * Constructor method for UserInfoResult
     * @uses UserInfoResult::setUsers()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem $users
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem $users = null)
    {
        $this
            ->setUsers($users);
    }
    /**
     * Get Users value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem|null
     */
    public function getUsers(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem
    {
        return $this->Users ?? null;
    }
    /**
     * Set Users value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem $users
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\User\StructType\UserInfoResult
     */
    public function setUsers(?\Larapress\PayamGostar\Services\PayamGostar\Soap\User\ArrayType\ArrayOfUserInfoItem $users = null): self
    {
        if (is_null($users) || (is_array($users) && empty($users))) {
            unset($this->Users);
        } else {
            $this->Users = $users;
        }
        
        return $this;
    }
}
