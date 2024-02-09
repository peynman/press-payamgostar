<?php

namespace Larapress\PayamGostar\Services\PayamGostar\Listeners;

use App\Models\User;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Larapress\ECommerce\Services\SupportGroup\SupportGroupBatchUpdatedEvent;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;

class PayamGostarSyncUsersListener implements ShouldQueue
{
    use InteractsWithQueue;

    /** @var IPayamGostarService */
    protected $service;

    // /** run this listener on long queue */
    // public $queue = 'long-jobs';
    // public $connection = 'jobs';

    public function __construct(IPayamGostarService $service)
    {
        $this->service = $service;
    }

    // /** run this listener on long queue */
    // public $queue = 'long';

    public function handle(SupportGroupBatchUpdatedEvent $event)
    {
        ini_set('max_execution_time', 0);

        foreach ($event->userIds as $userId) {
            try {
                $user = User::find($userId);
                $this->service->syncUser($user);
                $this->service->syncUserCarts($user);
            } catch (Exception $e) {
                Log::error('Failed syncing user on group sync.', [
                    'user_id' => $userId,
                    'error' => $e->getMessage(),
                ]);
            }
        }
    }
}
