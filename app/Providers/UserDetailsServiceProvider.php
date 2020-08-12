<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserDetailsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('userDetails', 'App\Services\UserDetailsService');
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
