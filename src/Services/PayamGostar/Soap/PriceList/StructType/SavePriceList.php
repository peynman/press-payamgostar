<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePriceList StructType
 * @subpackage Structs
 */
class SavePriceList extends AbstractStructBase
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
     * The priceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo $priceList = null;
    /**
     * Constructor method for SavePriceList
     * @uses SavePriceList::setUsername()
     * @uses SavePriceList::setPassword()
     * @uses SavePriceList::setPriceList()
     * @param string $username
     * @param string $password
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo $priceList
     */
    public function __construct(?string $username = null, ?string $password = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo $priceList = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setPriceList($priceList);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceList
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceList
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
     * Get priceList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo|null
     */
    public function getPriceList(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo
    {
        return $this->priceList ?? null;
    }
    /**
     * Set priceList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo $priceList
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\SavePriceList
     */
    public function setPriceList(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo $priceList = null): self
    {
        if (is_null($priceList) || (is_array($priceList) && empty($priceList))) {
            unset($this->priceList);
        } else {
            $this->priceList = $priceList;
        }
        
        return $this;
    }
}
