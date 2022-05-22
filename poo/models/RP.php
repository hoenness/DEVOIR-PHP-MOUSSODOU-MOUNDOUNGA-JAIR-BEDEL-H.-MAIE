<?php
 namespace App\Models; 
    //la relation d'héritage est rprésenté par un extend
    //Rp hérite de user
    class RP extends User{

//tous les attributs qui doivent etre initialisés au moment de l'instanciation doivent se faire ici
        public function __construct()
        {
            $this->role="ROLE";//dès qu'on crée un objet de type RP automatiquement sont role est initiaisé (ecriture liée a protcted)
        }
        //en fesant une redefinition qui correspond a une evolution et pour faire une rdefinition on doit respecter
        //-1 heritage de methode quand on a cet heritage, on a la possibilité de la rédefinir c-t-d changer son comportement
        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
            //$this->role = $role;ici on efface pour changer le comportement de role; et le setrole dans user n'exite plus dans rp car on a redfini la methode 

            return $this;
        }

       
    }
















?>