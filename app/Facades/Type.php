<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class Type extends Facade
{
    protected static function getFacadeAccessor() {
        return 'type';
    }
}