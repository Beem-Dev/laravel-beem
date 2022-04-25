<?php

namespace Beem\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class BeemRedirect extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'BeemRedirect';
    }
}
