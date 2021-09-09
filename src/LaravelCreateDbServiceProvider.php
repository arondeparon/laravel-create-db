<?php

namespace ArondeParon\LaravelCreateDb;

use ArondeParon\LaravelCreateDb\Commands\LaravelCreateDbCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCreateDbServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-create-db')
            ->hasCommand(LaravelCreateDbCommand::class);
    }
}
