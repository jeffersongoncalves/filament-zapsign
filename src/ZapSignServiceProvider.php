<?php

namespace JeffersonGoncalves\Filament\ZapSign;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ZapSignServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-zapsign')
            ->hasTranslations();
    }
}
