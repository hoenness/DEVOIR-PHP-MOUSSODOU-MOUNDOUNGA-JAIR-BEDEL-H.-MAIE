<?php

class User{
    protected string $nomComplet;
    protected string $login;
    protected string $password;

    public function __construct()
    {
        
    }

    //Getters

    public function getNomComplet():string{
        return $this->nomComplet;
    }
    public function getLogin():string{
        return $this->login;
    }
    public function getPassword():string{
        return $this->password;
    }

    //Setters

    public function setNomComplet(string $nomComplet):void{
        $this->nomComplet=$nomComplet;
    }
    public function setLogin(string $login):void{
        $this->login=$login;
    }
    public function setPassword(string $password):void{
        $this->password=$password;
    }
}