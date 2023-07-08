<?php

namespace AxonC\FilamentCopyablePlaceholder\Tests;

use AxonC\FilamentCopyablePlaceholder\FilamentCopyablePlaceholderServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentCopyablePlaceholderServiceProvider::class,
        ];
    }
}
