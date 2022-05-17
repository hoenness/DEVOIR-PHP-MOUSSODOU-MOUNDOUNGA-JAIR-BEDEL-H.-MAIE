<?php
class Cours{
    private int $id;
    private string $heureDebut;
    private string $heureFin;
    private DateTime $dateCours;

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
        return new Professeur();
    }

    //ManyTooOne => Module
    //un objt de type cours contint un objet de type module
    //plusieurs objet de type cours sont associé a un objet de typ module
    public function module():Module{
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