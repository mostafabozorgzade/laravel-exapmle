<?php

namespace Mostafabozorgzade\Example;

use Illuminate\Support\Facades\Route;
use Mostafabozorgzade\Example\Commands\ExampleCommand;
use Mostafabozorgzade\Example\Http\Controllers\MyController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-exapmle')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }

    public function packageRegistered()
    {

        Route::macro('example', function (string $baseUrl = 'example') {

            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);

            });

        });

        // in the package
        // "/example", "/custom-route"

        // Route::example('custom-route');

    }
}
