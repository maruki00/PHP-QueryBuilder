<?php

namespace App\Infrastructure\Kernel\DB;

abstract class Model extends Query
{
    public static string $tanleName = '';
    public static array $fillable = [];
}