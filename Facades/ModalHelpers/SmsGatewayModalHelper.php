<?php

namespace CustomFacades\ModalHelpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Config\Repository
 */
class SmsGatewayModalHelper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ModalHelpers\SmsGatewayModalHelper';
    }
}