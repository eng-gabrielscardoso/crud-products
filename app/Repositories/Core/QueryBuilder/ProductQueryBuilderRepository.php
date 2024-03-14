<?php

namespace App\Repositories\Core\QueryBuilder;

use App\Repositories\Contracts\ProductRepositoryContract;
use App\Repositories\Core\BaseQueryBuilderRepository;

class ProductQueryBuilderRepository extends BaseQueryBuilderRepository implements ProductRepositoryContract
{
    /**
     * {@inheritDoc}
     */
    public function table(): string
    {
        return 'products';
    }
}
