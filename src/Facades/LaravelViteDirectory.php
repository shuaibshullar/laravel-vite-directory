<?php

declare(strict_types=1);

namespace LaravelViteDirectory\LaravelViteDirectory\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelViteDirectory\LaravelViteDirectory\LaravelViteDirectory
 */
class LaravelViteDirectory extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelViteDirectory\LaravelViteDirectory\LaravelViteDirectory::class;
    }
}
