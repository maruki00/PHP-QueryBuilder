
<?php

require_once './DBHandler.php';
require_once './IQueryBuilder.php';
require_once './Model.php';
require_once './Query.php';
require_once './App.php';




//$a = QueryBuilder\App::query()->where('id', '=', 1)->where('name', '=', '234')->where('id', '>=', 122)->orWhere('sdf', 'asdf', 'asdf')->get();


QueryBuilder\App::create([
    'name'=> '1234',
    'id' => 'sdfs'
]);