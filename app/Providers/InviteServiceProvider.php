<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InviteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('invite', 'App\Services\InviteService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
