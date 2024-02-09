<?php

namespace Larapress\PayamGostar\CRUD;

use Larapress\CRUD\Services\IPermissionsMetadata;

class PayamGostarPermissions implements IPermissionsMetadata {

    /***
     * get permissions required for each CRUD operation
     *
     * @return array
     */
    public function getPermissionVerbs() {
        return [
            'sync-users',
            'delete-users',
        ];
    }

    /**
     * Permission group name.
     *
     * @return string
     */
    public function getPermissionObjectName() {
        return 'payamgostar';
    }
}