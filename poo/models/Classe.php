<?php

namespace App\Models;

use App\core\Model;

class Classe extends Model
{
        //atttributs instance
        private int $id;
        private string $libelle;
        private string $filiere;
        private string $nivau;



        public function __construct()
        {
                self::$table = "classe"; //une methode static on y accede a travers self(opérateur de portée de classe)
        }


        //FONCTION Navigationnelles, foction issu des associations du model
        //OneToManay => cours
        //une classe associe a plusieurs cours
        //un objt de type classe contint plusieur objet de type cours
        public function cours(): array
        {

                $sql = "select c.* from cours c, classe cl where c.classe_id=cl.id and cl.id={$this->id}"; //ici on récupere les cours d'une classe   

                return [];
        }





        //proprite de Navigation
        //OnetoMany, t donc on aura un tableau d'inscription qui sera vide pour le moment

        //2eme methode
        // public function inscriptions():array{
        // return [];//alors que quand on a une classe on peut ne pas avoir d'inscrit d'ou le tableau vide
        // }
        //Methodes
        //constructeurs: creer des objets
        ///public function __construct()
        //{

        //}
        //->(instance ou objet) ou :: =>(class) => operateur de portee
        //getters => permttent d'obtenir la valeur d'un attribut , comme les attributs dont en privé ou protected
        //alors ils ne sont pas visibles sur l'interface de l'objet
        //public function getlibelle(){
        //pour acceder a un attribut d'une class au niveau d'une fonction
        //on utilise $this
        //return $this->libelle;
        //}
        //setters
        //metiers



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

        /**
         * Get the value of filiere
         */
        public function getFiliere()
        {
                return $this->filiere;
        }

        /**
         * Set the value of filiere
         *
         * @return  self
         */
        public function setFiliere($filiere)
        {
                $this->filiere = $filiere;

                return $this;
        }

        /**
         * Get the value of nivau
         */
        public function getNivau()
        {
                return $this->nivau;
        }

        /**
         * Set the value of nivau
         *
         * @return  self
         */
        public function setNivau($nivau)
        {
                $this->nivau = $nivau;

                return $this;
        }
}
