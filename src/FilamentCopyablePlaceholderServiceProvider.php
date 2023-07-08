<?php

namespace AxonC\FilamentCopyablePlaceholder;

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
