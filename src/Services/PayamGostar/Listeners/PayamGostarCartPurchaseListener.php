<?php

namespace Larapress\PayamGostar\Services\PayamGostar\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Larapress\ECommerce\Services\Banking\Events\CartPurchasedEvent;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;

class PayamGostarCartPurchaseListener implements ShouldQueue
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

    public function handle(CartPurchasedEvent $event)
    {
        ini_set('max_execution_time', 0);

        $this->service->syncCart($event->getCart());
    }
}
