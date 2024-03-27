<?php

namespace App\Infrastructure\Kernel\DB;

interface IQueryBuilder
{
    public static function query():IQueryBuilder;
    public function selectRaw(string $sql, array $params = []):IQueryBuilder;
    public function whereBetween(string $column, string $operator, mixed $value): IQueryBuilder;
    public function where(string $column, string $operator, mixed $value):IQueryBuilder;
    public function andWhere(string $column, string $operator, mixed $value):IQueryBuilder;
    public function orWhere(string $column, string $operator, mixed $value):IQueryBuilder;
    public function whereMany(array $condition):IQueryBuilder;
    public function create(array $attributes): void;
    public static function insert(array $attributes): void;
    public function get(): mixed;
    public function first(): mixed;
    public function orderBy(string $orderByColumn, string $sort='asc'): IQueryBuilder;

    public function join(string $table1, string $table2, string $column1, string $column2, string $operation, string $type = 'inner'): IQueryBuilder;

}