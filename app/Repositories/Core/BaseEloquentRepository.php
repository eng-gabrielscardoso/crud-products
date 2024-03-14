<?php

namespace App\Repositories\Core;

use App\Repositories\Contracts\RepositoryContract;
use App\Repositories\Exceptions\UndefinedEntityException;

abstract class BaseEloquentRepository implements RepositoryContract
{
    /**
     * The data model for repository
     */
    protected $entity;

    /**
     * Create a new repository
     */
    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    /**
     * Returns the entity accessor
     */
    abstract function entity(): string;

    /**
     * Evaluate the entity of instance
     * @throws \App\Repositories\Exceptions\UndefinedEntityException
     * @return mixed
     */
    public function resolveEntity(): mixed
    {
        throw_unless(method_exists($this, 'entity'), UndefinedEntityException::class);

        return app($this->entity());
    }

    /**
     * {@inheritDoc}
     */
    public function findAll(): mixed
    {
        return $this->entity->get();
    }

    /**
     * {@inheritDoc}
     */
    public function findById(int $id): mixed
    {
        return $this->entity->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findWhere(string $column, mixed $value): mixed
    {
        return $this->entity->where($column, $value)->get();
    }

    /**
     * {@inheritDoc}
     */
    public function findWhereFirst(string $column, mixed $value): mixed
    {
        return $this->entity->where($column, $value)->first();
    }

    /**
     * {@inheritDoc}
     */
    public function paginate(int $perPage = 10): mixed
    {
        return $this->entity->paginate($perPage);
    }

    /**
     * {@inheritDoc}
     */
    public function store(array $payload): mixed
    {
        return $this->entity->create($payload);
    }

    /**
     * {@inheritDoc}
     */
    public function update(int $id, array $payload): mixed
    {
        return $this->findById($id)->update($payload);
    }

    /**
     * {@inheritDoc}
     */
    public function delete(int $id): mixed
    {
        return $this->findById($id)->delete();
    }
}
