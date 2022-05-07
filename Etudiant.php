<?php
require_once("User.php");
require_once("DossierEtudiant.php");
require_once("Inscription.php");

class Etudiant extends User{
    private string $matricule;
    private DossierEtudiant $dossier=null;
    private Inscription $inscription=[];

    public function __construct()
    {
        
    }
    

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of dossier
     */ 
    public function getDossier()
    {
        return $this->dossier;
    }

    /**
     * Set the value of dossier
     *
     * @return  self
     */ 
    public function setDossier($dossier)
    {
        $this->dossier = $dossier;

        return $this;
    }

    /**
     * Get the value of inscription
     */ 
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set the value of inscription
     *
     * @return  self
     */ 
    public function setInscription($inscription)
    {
        $this->inscription = $inscription;

        return $this;
    }
}