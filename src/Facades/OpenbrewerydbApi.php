<?php

namespace AlexJustesen\OpenbrewerydbApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexJustesen\OpenbrewerydbApi\OpenbrewerydbApi
 */
class OpenbrewerydbApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-openbrewerydb-api';
    }
}
