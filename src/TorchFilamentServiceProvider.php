<?php

namespace LaraZeus\TorchFilament;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TorchFilamentServiceProvider extends PackageServiceProvider
{
    public static string $name = 'zeus-torch-filament';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }
}
