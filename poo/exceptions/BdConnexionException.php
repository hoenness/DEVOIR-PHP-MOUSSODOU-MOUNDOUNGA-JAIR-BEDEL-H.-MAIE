<?php
namespace App\Exceptions;
class BdConnexionException extends \PDOException{
    public $message="Erreur de connexion veillez contacter votre Admin";// ici l'attribut est en public car on en a hérité et on ne peut diminuier va visibilité, mais on peut m'augmneter sa vibilité


 }