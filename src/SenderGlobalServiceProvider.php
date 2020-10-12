<?php

namespace Eduardom\SenderGlobal;

use Illuminate\Support\ServiceProvider;

class SenderGlobalServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes(
            [
                __DIR__ . '/config/config.php' => config_path('senderglobal.php'),
            ], 'config'
        );
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('senderglobal', function () {
            return new SenderGlobalManager();
        });

    }
}
