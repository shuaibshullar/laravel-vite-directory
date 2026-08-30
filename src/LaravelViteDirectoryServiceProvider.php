<?php

declare(strict_types=1);

namespace LaravelViteDirectory\LaravelViteDirectory;

use Illuminate\Support\ServiceProvider;
use LaravelViteDirectory\LaravelViteDirectory\Console\Commands\LaravelViteDirectoryCommand;

class LaravelViteDirectoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-vite-directory.php', 'laravel-vite-directory');

        $this->app->singleton(LaravelViteDirectory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-vite-directory.php' => config_path('laravel-vite-directory.php'),
        ], ['laravel-vite-directory', 'laravel-vite-directory-config']);

        $this->commands([
            LaravelViteDirectoryCommand::class,
        ]);
    }
}
