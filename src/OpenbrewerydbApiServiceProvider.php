<?php

namespace AlexJustesen\OpenbrewerydbApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OpenbrewerydbApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-openbrewerydb-api')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(OpenbrewerydbApi::class, fn () => new OpenbrewerydbApi());
        $this->app->bind('openbrewerydb-api', OpenbrewerydbApi::class);
    }
}
