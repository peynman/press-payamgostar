<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessNoteInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessNoteInfo
 * @subpackage Structs
 */
class BusinessNoteInfo extends GeneralCrmObjectInfo
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
     * Constructor method for BusinessNoteInfo
     * @uses BusinessNoteInfo::setContent()
     * @param string $content
     */
    public function __construct(?string $content = null)
    {
        $this
            ->setContent($content);
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
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo
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
}
