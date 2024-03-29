<?php

/*
 *  Author: Abdellah Oulahyane
 */
namespace QueryBuilder;;

abstract class DBHandler
{
    private static ?\PDO $cnx = null;

    /**
     * @return \PDO
     * @throws \Exception
     */
    public final static function dbConnect():\PDO
    {
        try {
            if(is_null(self::$cnx)){
                self::$cnx =  new \PDO('mysql:host=127.0.0.1; dbname=querybuilder;', 'root', 'user');
            }
            return self::$cnx;
        }catch (\Exception $er){
            throw new \Exception($er->getMessage());
        }
    }
}