<?php
require_once("Etudiant.php");

class DossierEtudiant{
    //Attributs d'instances
    private DateTime $dateOuverture;
    //Attributs de navigations
    private Etudiant $etudiant;

    //Méthodes
    public function __construct()
    {
        
    }

    public function getDateOuverture():DateTime{
        return $this->dateOuverture;
    }

    public function setDateOuverture(DateTime $dateOuverture):void{
        $this->dateOuverture=$dateOuverture;
    }

    /**
     * Get the value of etudiant
     */ 
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */ 
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }
}