<?php

namespace CustomFacades\Repositories;

use Illuminate\Support\Facades\Facade;

class DeviceGroupRepo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Tobuli\Repositories\DeviceGroup\DeviceGroupRepositoryInterface';
    }
}