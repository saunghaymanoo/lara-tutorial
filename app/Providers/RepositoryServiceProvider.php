<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Student\StudentRepositoryInterface;
use App\Repositories\Student\StudentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
