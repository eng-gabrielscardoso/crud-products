<?php

namespace App\Repositories\Contracts;

interface RepositoryContract
{
    /**
     * Return all registers
     */
    public function findAll(): mixed;

    /**
     * Return a register by ID
     */
    public function findById(int $id): mixed;

    /**
     * Return all registers from a given column
     */
    public function findWhere(string $column, mixed $value): mixed;

    /**
     * Return the first register from a given column
     */
    public function findWhereFirst(string $column, mixed $value): mixed;

    /**
     * Return paginated registers
     */
    public function paginate(int $perPage = 10): mixed;

    /**
     * Store a resource
     */
    public function store(array $payload): mixed;

    /**
     * Update a resource
     */
    public function update(int $id, array $payload): mixed;

    /**
     * Delete a resource
     */
    public function delete(int $id): mixed;
}
