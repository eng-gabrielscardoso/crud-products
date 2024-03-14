<?php

namespace App\Repositories\Core;

use App\Repositories\Contracts\RepositoryContract;
use App\Repositories\Exceptions\UndefinedTableException;
use Illuminate\Support\Facades\DB;

abstract class BaseQueryBuilderRepository implements RepositoryContract
{
    /**
     * The data model for repository
     */
    protected $table;

    /**
     * Create a new query builder repository
     */
    public function __construct()
    {
        $this->table = $this->resolveTable();
    }

    /**
     * Returns the table accessor
     */
    abstract public function table(): string;

    /**
     * Evaluate the table of instance
     *
     * @throws \App\Repositories\Exceptions\UndefinedTableException
     */
    public function resolveTable(): mixed
    {
        throw_unless(method_exists($this, 'table'), UndefinedTableException::class);

        return DB::table($this->table());
    }

    /**
     * {@inheritDoc}
     */
    public function findAll(): mixed
    {
        return $this->table->get();
    }

    /**
     * {@inheritDoc}
     */
    public function findById(int $id): mixed
    {
        return $this->table->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findWhere(string $column, mixed $value): mixed
    {
        return $this->table->where($column, $value)->get();
    }

    /**
     * {@inheritDoc}
     */
    public function findWhereFirst(string $column, mixed $value): mixed
    {
        return $this->table->where($column, $value)->first();
    }

    /**
     * {@inheritDoc}
     */
    public function paginate(int $perPage = 10): mixed
    {
        return $this->table->paginate($perPage);
    }

    /**
     * {@inheritDoc}
     */
    public function store(array $payload): mixed
    {
        return $this->table->create($payload);
    }

    /**
     * {@inheritDoc}
     */
    public function update(int $id, array $payload): mixed
    {
        return $this->table->findById($id)->update($payload);
    }

    /**
     * {@inheritDoc}
     */
    public function delete(int $id): mixed
    {
        return $this->table->findById($id)->delete();
    }
}
