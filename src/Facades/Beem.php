<?php

namespace Beem\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravel
 */
class Beem extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-beem';
    }
}
