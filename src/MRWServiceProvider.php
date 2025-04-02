<?php

namespace Kavinsky\MRW;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kavinsky\MRW\Commands\MRWCommand;

class MRWServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mrw-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_mrw_api_table')
            ->hasCommand(MRWCommand::class);
    }
}
