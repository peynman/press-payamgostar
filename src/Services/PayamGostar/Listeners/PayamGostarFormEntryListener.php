<?php

namespace Larapress\PayamGostar\Services\PayamGostar\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;
use Larapress\Profiles\Services\FormEntry\FormEntryUpdateEvent;

class PayamGostarFormEntryListener implements ShouldQueue
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

    public function handle(FormEntryUpdateEvent $event)
    {
        if (
        // update user profile in payamgostar if this is
            // a profile update or
            $event->formId === config('larapress.ecommerce.lms.profile_form_id') ||
            // support group update
            $event->formId === config('larapress.ecommerce.lms.support_group_default_form_id')
        ) {
            ini_set('max_execution_time', 0);
            $this->service->syncUser($event->userId);            
        }
    }


    // public function shouldQueue(FormEntryUpdateEvent $event): bool
    // {
    //     return
    //         // a profile update or
    //         $event->formId === config('larapress.ecommerce.lms.profile_form_id') ||
    //         // support group update
    //         $event->formId === config('larapress.ecommerce.lms.support_group_default_form_id');
    // }
}
