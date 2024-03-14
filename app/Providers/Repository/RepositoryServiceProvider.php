<?php

namespace App\Providers\Repository;

use App\Repositories\Contracts\CategoryRepositoryContract;
use App\Repositories\Contracts\ProductRepositoryContract;
use App\Repositories\Core\Eloquent\ProductEloquentRepository;
use App\Repositories\Core\QueryBuilder\CategoryQueryBuilderRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Repository service provider to bind repository contracts and concrete classes
 * To alternate between EloquentORM and Query Builder just change the concrete class in binders
 */
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
