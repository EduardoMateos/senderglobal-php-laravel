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
            $client = new ApiClient();
            return $client->setFromName(config('senderglobal.api_from_name'))
                            ->setEmailReply(config('senderglobal.api_reply_email'))
                            ->setId(config('senderglobal.api_id'))
                            ->setUser(config('senderglobal.api_user'))
                            ->setPass(config('senderglobal.api_pass'))
                            ->setIdAccount(config('senderglobal.api_id_account'))
                            ->setUrlApi(config('senderglobal.api_url'));
        });

    }
}
