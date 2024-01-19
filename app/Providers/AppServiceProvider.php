<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Auth\RegistersUserService;
use App\Services\Interfaces\Auth\RegistersUserInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RegistersUserInterface::class, RegistersUserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 
    }
}
