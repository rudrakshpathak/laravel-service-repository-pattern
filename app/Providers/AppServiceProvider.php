<?php

namespace App\Providers;

use App\Entities\User;
use App\Repositories\User\UserRepository;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Repositories\User\UserInterface', function ($app) {
            return new UserRepository(new User());
        });

        $this->app->bind('UserService', function ($app) {
            return new UserService(
                // Injecting user dependency
                $app->make('App\Repositories\User\UserInterface')
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
