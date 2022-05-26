<?php
namespace App\Models; 
class Module{
    private int $id;
    private string $libelle;

    //OneToMany avec cours
    //un module associe plusieurs cours
    public function cours():array{
        return [];
    }

    //ManyToMany avec professeurs
    //un objet de type modul contient plusieurs objets de type professeur
    public function professeurs():array{
        return [];
    }


    //OneToOne avec adresse
    //on rprsente avc le type null car un prof peut ne pas avoir d'adrsse 
     public function adresse():Adresse|null{
        return null;
    }


       


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}











?>