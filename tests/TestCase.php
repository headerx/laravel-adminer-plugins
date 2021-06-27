<?php

namespace Headerx\AdminerPlugin\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Headerx\AdminerPlugin\AdminerPluginServiceProvider;

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
