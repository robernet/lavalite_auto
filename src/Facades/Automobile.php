<?php

namespace Laraauto\Automobile\Facades;

use Illuminate\Support\Facades\Facade;

class Automobile extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraauto.automobile';
    }
}
