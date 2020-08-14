<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class LoginProcess extends Facade
{
    protected static function getFacadeAccessor() {
        return 'login';
    }
}