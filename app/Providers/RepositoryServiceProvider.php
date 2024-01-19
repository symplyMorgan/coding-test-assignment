<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Image;
use App\Repositories\UserRepository;
use App\Repositories\ImageRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ImageRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->when(UserRepository::class)
            ->needs(Model::class)
            ->give(User::class);

        $this->app->when(ImageRepository::class)
            ->needs(Model::class)
            ->give(Image::class);
    }
}
