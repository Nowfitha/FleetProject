<?php

namespace CustomFacades\Validators;

use Illuminate\Support\Facades\Facade;

class AdminDeviceTypeImeiValidator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Tobuli\Validation\AdminDeviceTypeImeiValidator';
    }
}
