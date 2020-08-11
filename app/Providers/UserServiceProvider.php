<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProviders extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('user', 'App\Services\UserService');
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
