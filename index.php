
<?php

require_once 'vendor/autoload.php';




//$a = QueryBuilder\App::query()->where('id', '=', 1)->where('name', '=', '234')->where('id', '>=', 122)->orWhere('sdf', 'asdf', 'asdf')->get();


QueryBuilder\App::create([
    'name' => '1234',
    'id'   => 'sdfs',
]);