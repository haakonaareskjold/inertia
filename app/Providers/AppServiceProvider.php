<?php

namespace App\Providers;

use App\Models\Repositories\MessageRepository\MessageRepository;
use App\Models\Repositories\MessageRepository\MessageRepositoryInterface;
use App\Models\Repositories\UserRepository\UserRepository;
use App\Models\Repositories\UserRepository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            MessageRepositoryInterface::class,
            MessageRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
