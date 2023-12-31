<?php

namespace Mostafabozorgzade\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mostafabozorgzade\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mostafabozorgzade\Example\Example::class;
    }
}
