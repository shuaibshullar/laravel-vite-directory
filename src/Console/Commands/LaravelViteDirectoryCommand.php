<?php

declare(strict_types=1);

namespace LaravelViteDirectory\LaravelViteDirectory\Console\Commands;

use Illuminate\Console\Command;

class LaravelViteDirectoryCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-vite-directory:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-vite-directory.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('LaravelViteDirectory placeholder command executed.');

        return self::SUCCESS;
    }
}
