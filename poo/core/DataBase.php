<?php
namespace App\core;
use App\Exceptions\BdConnexionException;
use Exception;

class DataBase{
    //PDO va indiquer la connexion a la base de donnée, il correspond a l'instance de conexion
    private \PDO|null $pdo=null;//pdo a null signifi pas de conexion

     //Mode deconnecté permet d'ouvrir et de fermer la connexion 
    //ouverture a la base de donnée
    public function openConnexion(){
        //host : c'eest l'adresse du serveur de base de données
        try {
            //essaie de te connecter
            $this->pdo=new \PDO("mysql:dbname=gestion_scolaire_l2;host=localhost","root","");//ici on veut un onjet de type MySQL,sur xamp l'utilisateur n'a pas de mot de passe
            die("conecté");
        } catch (\Exception $ex) {
             die("Erreur de connexion veillez contacter votre Admin");
            //throw new BdConnexionException;
        }
       
        
    }

    public function closeConnexion(){
        $this->pdo=null;
     
    }

    public function executeSelect(string $sql,array $data=[],$single=false){
       //Requete non prepare(interdit de le faire car pas sécurisé)ou requete dont les variables sont injectés a lécriture
       //$id=1;
       //$sql="select * from classe where id=$id";


       //Requete preparee => Securise
       //Requet dont les donneé sont remplacées par des jokers
        $this->openConnexion();
       //$sql="select * from classe where id=? and role like ?";
        $stm=$this->pdo->prepare($sql);//pdo nous retoutourne  un ($stm)qui est un obj qui contient une requete a executer
        $stm->execute($data);//on execute un tableau de données
        if($single){
            $result=$stm->fetch();

        }else{
            $result=$stm->fetchAll();
        }
        $this->closeConnexion();//fermer la connexion
        return $result;


    }

    public function executeUpdate(string $sql,array $data=[]){
        $this->openConnexion();
       //$sql="select * from classe where id=? and role like ?";
        $stm=$this->pdo->prepare($sql);//pdo nous retoutourne  un ($stm)qui est un obj qui contient une requete a executer
        $stm->execute($data);//on execute un tableau de données
        $result=$stm->rowCount();//une requete de mise a jour retourne le nbr de ligne qui a été modifier or les requete de selection retourne tjs des données
        $this->closeConnexion();//fermer la connexion
        return $result;

    }







}









































































?>