<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryContract;

class CategoryController extends Controller
{
    /**
     * The data model for this controller
     */
    protected CategoryRepositoryContract $repository;

    /**
     * Create a new instance of this controller
     */
    public function __construct(CategoryRepositoryContract $repository)
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
    public function store(StoreCategoryRequest $request)
    {
        return $this->repository->store($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $this->repository->findById($category->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        return $this->repository->update($category->id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        return $this->repository->delete($category->id);
    }
}
