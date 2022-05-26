<?php

namespace App\core;

abstract class Model implements IModel
{ // ici on va redefinir
   
    protected static DataBase|null $database=null;//null signifi que l'objet de type database n'est pas encore crée

    protected static string $table;

    public function insert()
    {
    }
    public function update()
    {
    }
    public static function database():DataBase{
        //design pattern de type singleton=>Gain en memoire centrale
        if(self::$database==null){
            self::$database=new DataBase;

        }
        return self::$database;

    }

    public static function delete(int $id)
    {
            $sql = "delete from ".self::$table."  where id=?";
            return self::database()->executeUpdate($sql,[$id]);
    }
    public static function selectAll()
    {
            $sql = "select * from ".self::$table;
            return self::database()->executeSelect($sql);
    }
    public static function selectByid(int $id)
    {
        $sql="select * from ".self::$table." where id=?";
        return self::database()->executeSelect($sql,[$id]);
    }
    public static function selectWhere(string $sql, array $data = [], $single = false)
    {
        return self::database()->executeSelect($sql,$data,$single);
    }
}
