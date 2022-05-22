<?php
 namespace App\Models;

use App\core\Model;

class Cours extends Model{
    private int $id;
    private string $heureDebut;
    private string $heureFin;

    //classe de php donc on utilise un antislache \ namespace racine
    private \DateTime $dateCours;
    
    public function __construct()
    {
            self::$table="cours";//une methode static on y accede a travers self(opérateur de portée de classe)
    }
    //ManyTooOne =>classe
    //un objt de type cours contint un objet de type classe
    //plusieurs objet de type cours sont associé a un objet de type classe
    public function classe():Classe{
        return new Classe();
    }

    //ManyTooOne => professeur
    //un objt de type cours contint un objet de type professeur
    //plusieurs objet de type cours sont associé a un objet de type professeur
    public function professeur():Professeur{
        $sql="select u.* from cours c, user u where c.professeur_id=u.id and c.id={$this->id} and role like 'ROLE_PROFESSEUR"; 
        return new Professeur();
    }

    //ManyTooOne => Module
    //un objt de type cours contint un objet de type module
    //plusieurs objet de type cours sont associé a un objet de typ module
    public function module():Module{
        $sql="select m,* from cours c, module m where c.module_id=m.id and c.id={$this->id}";//ici on veut récupérer le module d'un cours et on une jointure ici
        
        return new Module();
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
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    /**
     * Get the value of heureDebut
     */ 
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */ 
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */ 
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */ 
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }
}





























?>