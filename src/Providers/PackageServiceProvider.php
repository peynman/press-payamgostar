<?php

namespace Larapress\PayamGostar\Providers;

use Illuminate\Support\ServiceProvider;
use Larapress\PayamGostar\Commands\PayamGostarCommands;
use Larapress\PayamGostar\Commands\PgSyncRecordsImportCommands;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;
use Larapress\PayamGostar\Services\PayamGostar\PayamGostarService;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IPayamGostarService::class, PayamGostarService::class);

        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'larapress');
        $this->loadMigrationsFrom(__DIR__.'/../../migrations');

        $this->publishes(
            [
            __DIR__.'/../../config/payamgostar.php' => config_path('larapress/payamgostar.php'),
            ],
            ['config', 'larapress', 'larapress-payamgostar']
        );

        if ($this->app->runningInConsole()) {
            $this->commands([
                PayamGostarCommands::class,
                PgSyncRecordsImportCommands::class,
            ]);
        }
    }
}
