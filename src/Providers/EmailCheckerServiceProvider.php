<?php

namespace Ibnuridho\EmailChecker\Providers;

use Illuminate\Support\ServiceProvider;

class EmailCheckerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('email-check', \Ibnuridho\EmailChecker\Helpers\EmailCheck::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
