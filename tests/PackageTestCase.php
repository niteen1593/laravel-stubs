<?php

declare(strict_types=1);

namespace Niteen1593\LaravelStubs\Tests;

use Niteen1593\LaravelStubs\Providers\StubsServiceProvider;
use Orchestra\Testbench\TestCase;

class PackageTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
