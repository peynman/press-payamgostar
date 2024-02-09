<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductGroupResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SaveProductGroupResult
 * @subpackage Structs
 */
class SaveProductGroupResult extends OperationResult
{
    /**
     * The ProductGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ProductGroupId = null;
    /**
     * Constructor method for SaveProductGroupResult
     * @uses SaveProductGroupResult::setProductGroupId()
     * @param string $productGroupId
     */
    public function __construct(?string $productGroupId = null)
    {
        $this
            ->setProductGroupId($productGroupId);
    }
    /**
     * Get ProductGroupId value
     * @return string|null
     */
    public function getProductGroupId(): ?string
    {
        return $this->ProductGroupId;
    }
    /**
     * Set ProductGroupId value
     * @param string $productGroupId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\Product\StructType\SaveProductGroupResult
     */
    public function setProductGroupId(?string $productGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($productGroupId) && !is_string($productGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productGroupId, true), gettype($productGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($productGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $productGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($productGroupId, true)), __LINE__);
        }
        $this->ProductGroupId = $productGroupId;
        
        return $this;
    }
}
