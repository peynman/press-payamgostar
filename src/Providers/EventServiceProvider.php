<?php

namespace Larapress\PayamGostar\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Larapress\ECommerce\Services\SupportGroup\SupportGroupBatchUpdatedEvent' => [
            // manual sync when users are imported, support group is updated or force sync is requested from admin panel
            'Larapress\PayamGostar\Services\PayamGostar\Listeners\PayamGostarSyncUsersListener',
        ],

        'Larapress\Auth\Signup\SignupEvent' => [
            // sync on user signup
            'Larapress\PayamGostar\Services\PayamGostar\Listeners\PayamGostarSignupListener'
        ],
    ];


    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
