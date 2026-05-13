<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan; // 1. Add this import

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // 2. Add this block to auto-run migrations safely in production
        if (app()->environment('production')) {
            Artisan::call('migrate', ['--force' => true]);
        }
    }
}