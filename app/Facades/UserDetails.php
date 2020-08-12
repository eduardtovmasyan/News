<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class UserDetails extends Facade
{
    protected static function getFacadeAccessor() {
        return 'userDetails';
    }
    
}