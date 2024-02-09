<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessNoteResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessNoteResult
 * @subpackage Structs
 */
class BusinessNoteResult extends OperationResult
{
    /**
     * The BusinessNote
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo|null
     */
    protected ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo $BusinessNote = null;
    /**
     * Constructor method for BusinessNoteResult
     * @uses BusinessNoteResult::setBusinessNote()
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo $businessNote
     */
    public function __construct(?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo $businessNote = null)
    {
        $this
            ->setBusinessNote($businessNote);
    }
    /**
     * Get BusinessNote value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo|null
     */
    public function getBusinessNote(): ?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo
    {
        return $this->BusinessNote ?? null;
    }
    /**
     * Set BusinessNote value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo $businessNote
     * @return \Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteResult
     */
    public function setBusinessNote(?\Larapress\PayamGostar\Services\PayamGostar\Soap\BusinessNote\StructType\BusinessNoteInfo $businessNote = null): self
    {
        if (is_null($businessNote) || (is_array($businessNote) && empty($businessNote))) {
            unset($this->BusinessNote);
        } else {
            $this->BusinessNote = $businessNote;
        }
        
        return $this;
    }
}
