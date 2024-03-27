<?php

/*
 *
 *
 *
 */


namespace App\Infrastructure\Kernel\DB;

abstract class Query extends DBHandler implements IQueryBuilder
{
    private string $table;
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

    /**
     * @throws \Exception
     */
    public final static function create(array $attributes): bool
    {
        self::dbConnect()->beginTransaction();
        try{
            $columns = implode(',', array_keys($attributes));
            $values  = implode(',',array_fill(0,'?', count($attributes)));
            $sql = "INSERT INTO {static::tableName}($columns) VALUES($values)";
            $statement = self::dbConnect()->prepare($sql);
            $result =  $statement->execute(array_values($attributes));
            self::dbConnect()->commit();
            return $result;
        }catch (\PDOException){
            self::dbConnect()->rollBack();
            return false;
        }

    }

    public final static function insert(array $attributes): void
    {
        $params = [];
        sql = '';
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
        return $this;
    }

    public function whereMany(array $condition):IQueryBuilder
    {

        return $this;
    }
}