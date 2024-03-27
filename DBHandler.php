<?php

namespace App\Infrastructure\Kernel\DB;

abstract class DBHandler
{
    private static \PDO $cnx ;

    /**
     * @return \PDO
     * @throws \Exception
     */
    public final static function dbConnect():\PDO
    {
        try {
            if(!is_null(self::$cnx)){
                self::$cnx =  new \PDO('');
            }
            return self::$cnx;
        }catch (\Exception $er){
            throw new \Exception($er->getMessage());
        }
    }
}