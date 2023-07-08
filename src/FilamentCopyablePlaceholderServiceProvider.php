<?php

namespace AxonC\FilamentCopyablePlaceholder;

use AxonC\FilamentCopyablePlaceholder\Commands\FilamentCopyablePlaceholderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCopyablePlaceholderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-copyable-placeholder')
            ->hasViews();
    }
}
