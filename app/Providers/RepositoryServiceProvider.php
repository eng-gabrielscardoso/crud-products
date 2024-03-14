<?php

namespace App\Providers;

use App\Repositories\Contracts\CategoryRepositoryContract;
use App\Repositories\Contracts\ProductRepositoryContract;
use App\Repositories\Core\Eloquent\ProductEloquentRepository;
use App\Repositories\Core\QueryBuilder\CategoryQueryBuilderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            CategoryRepositoryContract::class,
            CategoryQueryBuilderRepository::class,
        );

        $this->app->bind(
            ProductRepositoryContract::class,
            ProductEloquentRepository::class,
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
