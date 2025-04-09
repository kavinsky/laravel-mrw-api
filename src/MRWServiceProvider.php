<?php

namespace Kavinsky\MRW;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MRWServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('mrw-api');
    }

    public function registeringPackage(): void
    {
        $this->app->bind(MRW::class, function ($app) {
            return new MRW(Config::fromArray($app['config']['services']['mrw']));
        });

    }
}
