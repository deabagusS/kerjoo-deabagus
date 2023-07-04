<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\AnnualLeaveRepositoryInterface;
use App\Repositories\AnnualLeaveRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(AnnualLeaveRepositoryInterface::class, AnnualLeaveRepository::class);
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
