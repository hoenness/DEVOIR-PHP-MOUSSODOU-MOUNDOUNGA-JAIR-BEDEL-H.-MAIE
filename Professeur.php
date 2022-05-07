<?php
require_once("User.php");
require_once("Grade.php");

class  Professeur extends User{
    //Attributs
        private string $nci;
        private string $email;
        private Grade $grade;
    //Méthodes
        
        


        /**
         * Get the value of nci
         */ 
        public function getNci()
        {
                return $this->nci;
        }

        /**
         * Set the value of nci
         *
         * @return  self
         */ 
        public function setNci($nci)
        {
                $this->nci = $nci;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of grade
         */ 
        public function getGrade()
        {
                return $this->grade;
        }

        /**
         * Set the value of grade
         *
         * @return  self
         */ 
        public function setGrade($grade)
        {
                $this->grade = $grade;

                return $this;
        }
}