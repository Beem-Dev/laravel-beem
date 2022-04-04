<?php

namespace Beem\Laravel\Beem\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Beem\Laravel\Beem\Beem
 */
class Beem extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-beem';
    }
}
