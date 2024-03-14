<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryContract;

class ProductController extends Controller
{
    /**
     * The data model for this controller
     */
    protected ProductRepositoryContract $repository;

    /**
     * Create a new instance of this controller
     */
    public function __construct(ProductRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->repository->findAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        return $this->repository->store($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->repository->findById($product->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        return $this->repository->update($product->id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return $this->repository->delete($product->id);
    }
}
