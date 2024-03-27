<?php

/*
 *
 *
 *
 */


namespace App\Infrastructure\Kernel\DB;

abstract class Query implements IQueryBuilder
{
    private string $query;
    private array $columns = [];
    private array $where = ["WHERE"];
    private string $ordrby = '';
    private string $groubBy='';
    private string $limit='';

    private  array $join = [];
    private string $groupBy = '';
    private array $bindingParams=[];

    public static function query(): IQueryBuilder
    {
        return new static;
    }

    public final function selectRaw(string $sql, array $params = []): IQueryBuilder
    {
        $this->columns[]=$sql;
        $this->bindingParams[] = $params;
        return $this;
    }

    public final function whereBetween(string $column, string $operator, mixed $value): IQueryBuilder
    {
        $this->where []= "$column $operator ?";
        $this->bindingParams[]=$value;
        return $this;
    }

    public final function where(string $column, string $operator, mixed $value): IQueryBuilder
    {
        $this->where []= "$column $operator ?";
        $this->bindingParams[]=$value;
        return $this;
    }

    public final function andWhere(string $column, string $operator, mixed $value): IQueryBuilder
    {
        $this->where []= " and $column $operator ?";
        $this->bindingParams[]=$value;
        return $this;
    }

    public final function orWhere(string $column, string $operator, mixed $value): IQueryBuilder
    {
        $this->where []= " or $column $operator ?";
        $this->bindingParams[]=$value;
        return $this;
    }

    public final static function create(array $attributes): void
    {
        $sql =
    }

    public final static function insert(array $attributes): void
    {

    }



    public final function get(): mixed
    {
        return $this;
    }

    public final function first(): mixed
    {
        return $this;
    }

    public final function orderBy(string $orderByColumn, string $sort = 'asc'): IQueryBuilder
    {
        return $this;
    }

    public function join(string $table1, string $table2, string $column1, string $column2, string $operation, string $type = 'inner'): IQueryBuilder
    {
        // TODO: Implement join() method.
    }
}