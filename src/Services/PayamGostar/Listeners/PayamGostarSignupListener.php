<?php

namespace Larapress\PayamGostar\Services\PayamGostar\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Larapress\Auth\Signup\SignupEvent;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;

class PayamGostarSignupListener implements ShouldQueue
{
    /** @var IPayamGostarService */
    protected $service;

    // /** run this listener on long queue */
    // public $queue = 'long-jobs';
    // public $connection = 'jobs';

    public function __construct(IPayamGostarService $service)
    {
        $this->service = $service;
    }

    public function handle(SignupEvent $event)
    {
        ini_set('max_execution_time', 0);

        $this->service->syncUser($event->userId);
    }
}
