<?php

namespace AliBayat\TestBroadcaster;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AliBayat\TestBroadcaster\TestBroadcaster
 */
class TestBroadcasterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'testbroadcaster';
    }
}
