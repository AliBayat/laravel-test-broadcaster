<?php

namespace AliBayat\TestBroadcaster\Tests;

use AliBayat\TestBroadcaster\CanTestBroadcasting;
use AliBayat\TestBroadcaster\TestBroadcasterFacade;
use AliBayat\TestBroadcaster\TestBroadcasterServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use CanTestBroadcasting;

    protected function getPackageProviders($app)
    {
        return [TestBroadcasterServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'TestBroadcaster' => TestBroadcasterFacade::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('broadcasting.default', 'test');
        $app['config']->set('broadcasting.connections.test', ['driver' => 'test']);
    }
}
