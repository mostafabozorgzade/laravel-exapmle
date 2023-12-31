<?php

namespace Mostafabozorgzade\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mostafabozorgzade\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-exapmle')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-exapmle_table')
            ->hasCommand(ExampleCommand::class);
    }
}
