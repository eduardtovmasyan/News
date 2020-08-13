<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class AdminList extends Facade
{
    protected static function getFacadeAccessor() {
        return 'adminlist';
    }
    
}