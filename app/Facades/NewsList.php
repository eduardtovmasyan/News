<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class NewsList extends Facade
{
    protected static function getFacadeAccessor() {
        return 'newsList';
    }
}