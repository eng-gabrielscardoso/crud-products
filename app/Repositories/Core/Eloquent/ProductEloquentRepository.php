<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryContract;
use App\Repositories\Core\BaseEloquentRepository;

class ProductEloquentRepository extends BaseEloquentRepository implements ProductRepositoryContract
{
    /**
     * {@inheritDoc}
     */
    public function entity(): string
    {
        return Product::class;
    }
}
