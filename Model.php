<?php

/*
 *  Author: Abdellah Oulahyane
 */
namespace QueryBuilder;

abstract class Model extends Query
{
    protected static string $tanleName = '';
    protected static array $fillable = [];
}