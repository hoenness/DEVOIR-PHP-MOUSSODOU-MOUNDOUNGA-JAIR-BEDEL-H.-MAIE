<?php
namespace App\Models;

use App\core\Model;

//Classe est concrete losqu'elle produit des objet, et une classe par defaut est concrete
//Classe est abstraite lorsqu'elle ne produit pas d'objet
//on cree une class abstraite grace au mot clé abstract et sont non instanciable
//classe final lorsquelle ne produise pas de classe fille, on ne peut pas en hérité et on l'obtient grace au mot clé final
  class User extends Model{
    //Attribut d'Instances(ils sont spécifique a chaque objet, c-t-d a chaque fois que l'on va créer un objet type user, il aura un id,login, password, role)
   // or les attribut static sont commun a l'ensmble des objets
   //si on met pivate a l'id,ça veut dire que les class fille ne peuvent atteindre l'attribut  qu'en passant par les getters et setters
   // et si c'est protected, pas besoin de getters and setter
    protected int $id;
    protected string $login;
    protected string $password;
    protected string $role;
     


    //Metohdes
    //constructeur est la methode qui permet de construire des objet
    //ici on a un constructeur par defaut, c-t-d son ajout dans la classe est falcutative
    public function __construct()
    {
        self::$table="user";
    }
    //Getters methode qui permet de rendre la valeur protectednou private , disponible dans l'interface de l'objet pour que l'attribut soit visible


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }




    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }





    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}




















?>