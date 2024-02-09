<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceListInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceListInfo
 * @subpackage Structs
 */
class PriceListInfo extends AbstractStructBase
{
    /**
     * The InvoiceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InvoiceType = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The PriceListProducts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo $PriceListProducts = null;
    /**
     * Constructor method for PriceListInfo
     * @uses PriceListInfo::setInvoiceType()
     * @uses PriceListInfo::setName()
     * @uses PriceListInfo::setPriceListProducts()
     * @param string $invoiceType
     * @param string $name
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo $priceListProducts
     */
    public function __construct(?string $invoiceType = null, ?string $name = null, ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo $priceListProducts = null)
    {
        $this
            ->setInvoiceType($invoiceType)
            ->setName($name)
            ->setPriceListProducts($priceListProducts);
    }
    /**
     * Get InvoiceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceType(): ?string
    {
        return $this->InvoiceType ?? null;
    }
    /**
     * Set InvoiceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceType
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo
     */
    public function setInvoiceType(?string $invoiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceType) && !is_string($invoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceType, true), gettype($invoiceType)), __LINE__);
        }
        if (is_null($invoiceType) || (is_array($invoiceType) && empty($invoiceType))) {
            unset($this->InvoiceType);
        } else {
            $this->InvoiceType = $invoiceType;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get PriceListProducts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo|null
     */
    public function getPriceListProducts(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo
    {
        return $this->PriceListProducts ?? null;
    }
    /**
     * Set PriceListProducts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo $priceListProducts
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\StructType\PriceListInfo
     */
    public function setPriceListProducts(?\Larapress\PayamGostar\Services\PayamGostar\Soap\PriceList\ArrayType\ArrayOfPriceListProductInfo $priceListProducts = null): self
    {
        if (is_null($priceListProducts) || (is_array($priceListProducts) && empty($priceListProducts))) {
            unset($this->PriceListProducts);
        } else {
            $this->PriceListProducts = $priceListProducts;
        }
        
        return $this;
    }
}
