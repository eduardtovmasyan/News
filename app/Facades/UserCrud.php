<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class UserCrud extends Facade
{
    protected static function getFacadeAccessor() {
        return 'userCrud';
    }
}