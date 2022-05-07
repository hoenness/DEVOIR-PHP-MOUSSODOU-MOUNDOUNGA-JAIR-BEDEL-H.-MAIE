<?php

class Classe{
    //Attributs Instances
        private string $libelle;
        private Inscription $inscription=[];

    //Methoses
        //Constructeurs
        public function __construct()
        {
            
        }
        //Getters permet d'obtenir la valeur d'un attribut private ou protected
        public function getLibelle():string{
            return $this->libelle;
        }
        //Setters
        public function setLibelle($libelle):void{
            $this->libelle=$libelle;
        }
        //Metiers

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