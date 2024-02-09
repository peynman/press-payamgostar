<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmObjectResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SaveCrmObjectResult
 * @subpackage Structs
 */
class SaveCrmObjectResult extends OperationResult
{
    /**
     * The CrmId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CrmId = null;
    /**
     * Constructor method for SaveCrmObjectResult
     * @uses SaveCrmObjectResult::setCrmId()
     * @param string $crmId
     */
    public function __construct(?string $crmId = null)
    {
        $this
            ->setCrmId($crmId);
    }
    /**
     * Get CrmId value
     * @return string|null
     */
    public function getCrmId(): ?string
    {
        return $this->CrmId;
    }
    /**
     * Set CrmId value
     * @param string $crmId
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\PhoneLog\StructType\SaveCrmObjectResult
     */
    public function setCrmId(?string $crmId = null): self
    {
        // validation for constraint: string
        if (!is_null($crmId) && !is_string($crmId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmId, true), gettype($crmId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($crmId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $crmId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($crmId, true)), __LINE__);
        }
        $this->CrmId = $crmId;
        
        return $this;
    }
}
