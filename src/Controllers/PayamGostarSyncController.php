<?php

namespace Larapress\PayamGostar\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Larapress\CRUD\CRUDControllers\BaseCRUDController;
use Larapress\ECommerce\Services\SupportGroup\SupportGroupBatchUpdatedEvent;

class PayamGostarSyncController extends BaseCRUDController
{
    public static function registerRoutes()
    {
        Route::post('payamgostar/sync-user/{gateway_id}', '\\' . self::class . '@syncUser')
            ->name('payamgostar.sync-users');
    }

    public function syncUser($userId)
    {
        SupportGroupBatchUpdatedEvent::dispatch([$userId]);

        return [
            'message' => 'شناسه کاربر در صف بروز رسانی قرار گرفت',
            'status' => 'success',
        ];
    }
}
