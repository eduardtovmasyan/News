<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminListServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('adminlist', 'App\Services\AdminListService');
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
