<?php

namespace Bissolli\LaravelPagarme;

use Illuminate\Support\Facades\Facade;

class PagarmeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pagarme';
    }
}
