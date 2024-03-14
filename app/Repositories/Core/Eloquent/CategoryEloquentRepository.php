<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryContract;
use App\Repositories\Core\BaseEloquentRepository;

class CategoryEloquentRepository extends BaseEloquentRepository implements CategoryRepositoryContract
{
    /**
     * {@inheritDoc}
     */
    public function entity(): string
    {
        return Category::class;
    }
}
