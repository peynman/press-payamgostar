<?php

namespace Larapress\PayamGostar\Services\PayamGostar;

use Larapress\CRUD\ICRUDUser;

/**
 * 
 */
interface IPayamGostarService
{
    /**
     * 
     */
    public function syncUser($user);

    /**
     * 
     */
    public function syncUsers($startIndex, $endIndex, $callback = null);

        /**
     * 
     */
    public function scheduleSyncUsers($startIndex, $endIndex, $callback = null);

    /**
     * 
     */
    public function syncUserCarts($user);

    /**
     * 
     */
    public function syncProduct($product);

    /**
     * 
     */
    public function syncProducts($startIndex, $endIndex, $callback = null);

    /**
     * 
     */
    public function syncCart($cart, $user = null);
}
