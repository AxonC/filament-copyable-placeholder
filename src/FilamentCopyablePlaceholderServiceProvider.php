<?php

namespace AxonC\FilamentCopyablePlaceholder;

use AxonC\FilamentCopyablePlaceholder\Commands\FilamentCopyablePlaceholderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCopyablePlaceholderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-copyable-placeholder')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-copyable-placeholder_table')
            ->hasCommand(FilamentCopyablePlaceholderCommand::class);
    }
}
