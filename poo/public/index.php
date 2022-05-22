<?php
//on aura tjrs besoin de charger l'autoloading ici pourqu'il puisse faire le chargement automatique
require_once("../vendor/autoload.php");

//notre application sera lancée a partir d'ici( au niveau du terminal, l'application on la lance sur le dossier public, pour lancer le serveur en local on fera:php -S localhost:8000 -t public)
//notre url corrspond a: localhost:8000, et toute requete doit passer par là, quel soit post ou get exemple:
//echo "j suis sur le front controller";
//ici il s'agit du front controller (index), ficher par lequel passe toutes les requettes(GET et POST) et la porte d'entrée de notre application
//avec le MVC2, on centralise l'acces a notre application qui passe par notre fichier index et faicilite la sécurisation de l'application
//Importer un fichier en php(require ou inculde)
//et une class est un fichier donc pour l'utiliser ici, je dois l'importer
//et ici il s'agit d'un chargement  manuel
//mais grace a l'autoloading
//require_once('../models/User.php');
//require_once('../models/RP.php');
//maintenant on peut créer des objets , et le processus s'appelle l'instanciation
//un objet emane tjrs d'une class, un objet a un etat et un comportement, or une class a des attribus et des 
//apres le chargement manuel on passe a l'instanciation (création)
//methodes
//construisons notre objet
//si on ajout abstract a la création de la class ici ça devient impossible de créer un objet
//$user=new User();//il fait appel a la fonction _construct()
//$classe2=new Classe();//quand on met new on fait applle au constructeur de la classe
//autre façon de construire un objet sans les parentheses
//$classe3=new Classe;//il fait appel a la fonction _construct()

//$objet-> : cette écriture veux dire qu'on demande l'interface de l'objet
//l'interface de l'obje c'est l'ensemble des attributs et methodes publics de la class 


//apres création de l'objet , on va lui donner un etat qui correspond a la valeur de ses attribut a un instant T
/*$user->setId(1)
     ->setlogin("douvewane")
     ->setPassword("douve")
     ->setRole("Role");

*/

//POUR ACCEDER a l'attribut on fait
//echo $user->getLogin();

//$classe1->setlibelle=("L2 GLRS B");
//$classe2->setId(2);
//$classe2->setlibelle=("L2 MAIE");
//$classe3->setId(3);
//classe3->setlibelle=("L2 CDSD");
//ici dans le script précédent, on ajouter set au liblle pour acceder a l'objt

//Afficher les classes sur la console et grace aux get de getters on accde aux valeurs ds attributs
//echo "ID ".$classe1->getId() ."\n";
//echo "Libelle() ".$classe1->getlibelle()."\n";

//echo "ID ".$classe2->getId() ."\n";
//echo "Libelle() ".$classe2->getlibelle()."\n";

//echo "ID ".$classe3->getId() ."\n";
//echo "Libelle() ".$classe3->getlibelle()."\n";



//un RP est un user c'est pourqw il n'y a pas d'erreur 
//$rp=new RP();//New fait appelle au constructeur
$rp->setId(1)
     ->setlogin("douvewane")
     ->setPassword("douve");
echo $rp->getRole();
//$rp->getRole("ROLE_AC");
//Ici on constate que l'on peut changer le role comme rp herite de user et c'est un pb donc on va le régler par la redefinition



//Autoloading => Chaargement automatique, va charger la classe et si besoin la classe mere si il y a dependance
//pour faire l'autoloading on utilise les Namespace est un ensemble de classe du meme domaine ,c'est un répertoire virtuel
//utiliser pour ranger nos classes
//on peut créer un Namspace Model qui va nous permettre de ranger toutes nos classes Models
//on peut créer un Namspace controllers qui va nous permettre ranges toutes nos classes controllers
//on peut créer un Namspace core(configuration,toutes les classes réutilisable) qui va nous permettre ranges toutes nos classes controllers
//pour faire de l'autoloading avec la notion de namespace il faut utiliser le composer
//composer:gestionnaires de dependances
//gestionnaire = dependances, ex de dependance , le dossier core est une dependance qui est un ensemble de classe réutilisable
//une dependance c'est des classes réutilisable
//en programation on des Hub de dependances => site qui offre bcp de dependance
//le gestionnaire de dependance , son role est de pouvoir télécharger, configurer les dépendance dans notre projet
//en php notre hub de dependance s'applle https://packagist.org/ 
//maintenanant pour utiliser une classe , on a plus besoin require 
//on indique seulement le chemein namespace
use App\Models\RP;
$rp = new RP();







?>