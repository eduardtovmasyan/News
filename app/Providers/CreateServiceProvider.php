<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CreateServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('create', 'App\Services\CreateService');
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
