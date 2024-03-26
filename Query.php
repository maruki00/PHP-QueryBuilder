<?php

/*
 *
 *
 *
 */


namespace App\Infrastructure\Kernel\DB;

class Query implements IQueryBuilder
{
    private string $query;
    private array $selects;
    private array $where;
    private string $ordrby = '';
    private string $groubBy;
    private string $limit;

    private string $having;
    private array $bindingParams;

    public static function query(): IQueryBuilder
    {
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