<?php

namespace CustomFacades\ModalHelpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Config\Repository
 */
class AlertModalHelper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ModalHelpers\AlertModalHelper';
    }
}