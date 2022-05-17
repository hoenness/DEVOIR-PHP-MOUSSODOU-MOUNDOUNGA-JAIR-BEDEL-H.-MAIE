<?php
//chargement manuel
require_once('./Classe.php');
//
class Inscription{
    //dans inscription on a many on va casser la relation, et donc on doit avoir un propriété de navigation
    //ManytoOne , ici on a un objet classe 1ere methode
  
    //methode_2
    public function classe():Classe{
        return new Classe();
    }//tout le code qui précède veux dire qu'a chaque fois qu'on a une inscription , on a une classe c'est 
    //pourquoi on a mis new classe, qui est traduite par une cardinalité minimum a 1

}
















?>