<?php

namespace App\Infrastructure\Kernel\DB;

interface IQueryBuilder
{
    public static function query():IQueryBuilder;
    public function selectRaw(string $sql, array $params = []):IQueryBuilder;
    public function whereBetween(...$params):IQueryBuilder;
    public function where(string $column, string $operator, mixed $value):IQueryBuilder;
    public function andWhere(string $column, string $operator, mixed $value):IQueryBuilder;
    public function orWhere(string $column, string $operator, mixed $value):IQueryBuilder;
    public function whereMany(array $condition):IQueryBuilder;
    public function save(array $attributes): void;
    public static function insert(array $attributes): void;
    public function get(): mixed;
    public function first(): mixed;

    public function 

}