<?php

namespace App\Infrastructure\Kernel\DB;

class Model implements IQueryBuilder
{
    private array $selects;
    private array $wheres;

//    public function
    public static function query(): IQueryBuilder
    {
        // TODO: Implement query() method.

        return new self();
    }

    public function selectRaw(string $sql, array $params = []): IQueryBuilder
    {
        // TODO: Implement selectRaw() method.
    }

    public function whereBetween(...$params): IQueryBuilder
    {
        // TODO: Implement whereBetween() method.
    }

    public function where(...$params): IQueryBuilder
    {
        // TODO: Implement where() method.
    }

    public function save(array $attributes): void
    {
        // TODO: Implement save() method.
    }

    public static function insert(array $attributes): void
    {
        // TODO: Implement insert() method.
    }
}