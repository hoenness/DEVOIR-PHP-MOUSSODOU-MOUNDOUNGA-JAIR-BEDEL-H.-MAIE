<?php
namespace App\core; 
interface IModel{

    public function insert();
    public function update();
    public static function delete(int $id);
    public static function selectAll();
    public static function selectByid(int $id);
    public static function selectWhere(string $sql,array $data=[],$single=false);//cette methode va nous permettre d'ecrire tout type de methode
    //select * from class where niveau like 'L1', cette requete renvoie plusieurs éléments
    //select * from user login like 'douve' and password like 'douve', celle-ci renvoie un seul élément
    //la proprité single quand elle est a false elle renvoie plusieur éléments
    //Methode d'instance s'applique sur un objet et utilise l'etat d'un objet qui correspond a la valeur de ses attribut et est appelé a travers un objet ex:
    //si une methode a besoin des valeurs d'un objet, elle devient automatiquement une méthode d'instance dans le cas contraire c'est une methode statique
    /**
     * $classe=new Classe()
     * $classe->setLibelle('L2 GLRS')
     * $classe->insert() //insert into classe (libelle) values('L2 GLRS')
     * $classe->setid(1)
     * $classe->delete()//delete from class where id=1// ICI comme c'est un seul attribut qui change on peut le mettre en statique
     */

    //Methodes statiques(static) s'applique sur une classe et n'utilise pas l'etat de l'objet, et est appelé directement a partir de la classe
    /**
     *  Classe::methode()
     *  Classe::delete(1)
     *  classe
     */

}














































?>