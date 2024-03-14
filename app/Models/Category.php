<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'description',
    ];

    /**
     * Return the products related to this
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
