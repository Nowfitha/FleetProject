<?php

namespace CustomFacades;

use Illuminate\Support\Facades\Facade;

class GeoLocation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Tobuli\Helpers\GeoLocation\GeoLocation';
    }
}