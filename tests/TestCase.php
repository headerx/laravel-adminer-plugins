<?php

namespace HeaderX\AdminerPlugin\Tests;

use HeaderX\AdminerPlugin\AdminerPluginServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AdminerPluginServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
