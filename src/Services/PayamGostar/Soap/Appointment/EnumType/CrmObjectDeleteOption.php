<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Appointment\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CrmObjectDeleteOption EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CrmObjectDeleteOption
 * @subpackage Enumerations
 */
class CrmObjectDeleteOption extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AssignChildrenToParent'
     * @return string 'AssignChildrenToParent'
     */
    const VALUE_ASSIGN_CHILDREN_TO_PARENT = 'AssignChildrenToParent';
    /**
     * Constant for value 'DeleteChildren'
     * @return string 'DeleteChildren'
     */
    const VALUE_DELETE_CHILDREN = 'DeleteChildren';
    /**
     * Constant for value 'Nothing'
     * @return string 'Nothing'
     */
    const VALUE_NOTHING = 'Nothing';
    /**
     * Constant for value 'DeletePersons'
     * @return string 'DeletePersons'
     */
    const VALUE_DELETE_PERSONS = 'DeletePersons';
    /**
     * Constant for value 'DeleteWithHistory'
     * @return string 'DeleteWithHistory'
     */
    const VALUE_DELETE_WITH_HISTORY = 'DeleteWithHistory';
    /**
     * Return allowed values
     * @uses self::VALUE_ASSIGN_CHILDREN_TO_PARENT
     * @uses self::VALUE_DELETE_CHILDREN
     * @uses self::VALUE_NOTHING
     * @uses self::VALUE_DELETE_PERSONS
     * @uses self::VALUE_DELETE_WITH_HISTORY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASSIGN_CHILDREN_TO_PARENT,
            self::VALUE_DELETE_CHILDREN,
            self::VALUE_NOTHING,
            self::VALUE_DELETE_PERSONS,
            self::VALUE_DELETE_WITH_HISTORY,
        ];
    }
}
