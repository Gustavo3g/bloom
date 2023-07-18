<?php

namespace App\Providers;

use App\Repositories\Users\contracts\IUserRepository;
use App\Repositories\Users\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(IUserRepository::class, UserRepository::class);
    }
}
