<?php

namespace App\Repositories\Core\QueryBuilder;

use App\Repositories\Contracts\CategoryRepositoryContract;
use App\Repositories\Core\BaseQueryBuilderRepository;

class CategoryQueryBuilderRepository extends BaseQueryBuilderRepository implements CategoryRepositoryContract
{
    /**
     * {@inheritDoc}
     */
    public function table(): string
    {
        return 'categories';
    }
}
