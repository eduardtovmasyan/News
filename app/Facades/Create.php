<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 */
class Create extends Facade
{
    protected static function getFacadeAccessor() {
        return 'create';
    }
}