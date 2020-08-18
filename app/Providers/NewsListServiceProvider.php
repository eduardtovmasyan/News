<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NewsListServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('newsList', 'App\Services\NewsListService');
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
