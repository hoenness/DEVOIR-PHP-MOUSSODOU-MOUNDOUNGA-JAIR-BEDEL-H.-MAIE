<?php
namespace App\Models; 
class Professeur extends User{
    private string $grade;
    private string $nomComplet;
    
    //OneToOne
    private Adresse|null $adresse=null;
    public function __construct()
        {
            parent::$role="ROLE_PROFESSEUR";
            $this->adresse=new Adresse;
            
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

        public static function selectAll()
        {
                $sql = "select * from ? where role like";
                return parent::database()->executeSelect($sql,[parent::$table,parent::$role]);
        }
        public function insert(){
            $sql="INSERT INTO ? ( `login`, `password`, `grade`, `ville`, `quartier`, `role`,nom_complet) VALUES (?,?,?,?,?,?,?);";//pour recuper la requete , on va sur phpadmin on clic sur la table qui nous intéresse , on cilc insérer, on me xx a partir de la seconde case jusqu'au premier executé apres on exécute
            return parent::database()->executeUpdate($sql,[parent::$table,$this->login,$this->password,$this->grade,$this->adresse->getVille(),$this->adresse->getQuartier(),parent::$role,$this->nomComplet]);//cette methode sera la meme pour le AC et le RP
        }





    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
}
















?>