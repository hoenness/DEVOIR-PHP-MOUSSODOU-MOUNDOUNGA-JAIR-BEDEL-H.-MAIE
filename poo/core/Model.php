<?php
namespace App\core;
abstract class Model implements IModel{// ici on va redefinir

    protected static string $table;

    public function insert(){

    }
    public function update(){

    }
    public static function delete(int $id){
        $sql="select * from".self::$table." where id=$id"; 

    }
    public static function selectAll(){

    }
    public static function selectByid(int $id){

    }
    public static function selectWhere(string $sql,array $data=[],$single=false){
        
    }

}

















































?>