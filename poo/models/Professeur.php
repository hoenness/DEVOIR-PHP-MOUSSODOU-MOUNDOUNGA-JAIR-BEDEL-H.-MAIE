<?php
class Professeur extends User{
    private string $grade;

    public function __construct()
        {
            $this->role="ROLE_PROFESSEUR";
        }

        //OneToMany avec cours
        //un professeur associe plusieurs cours
        public function cours():array{
            return [];
        }

        //ManyToMany avec module
        //un objet de type professeur contient plusieurs objet de type Module
        public function modules():array{
            return [];
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