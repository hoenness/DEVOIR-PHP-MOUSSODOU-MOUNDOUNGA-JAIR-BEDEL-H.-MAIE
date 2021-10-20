<?php /**
 * ecrire un script qui génère une année
 *  et un mois puis détermine et affiche
 * le nombre de jour de ce lois dans cette année 
 */
define("MAXA","2030");
define("MINA","2000");
$annee=rand(MINA,MAXA);

define("MINM",1);
define("MAXM",12);
$mois=rand(MINM,MAXM);

define("MaxJ",31);
define("MinJ",1);
$jour=rand(MinJ,MaxJ);

define("Maxj",31);
define("Minj",1);
$nbj=rand(Minj,Maxj);

echo("C'est le mois ".$mois."<br>");

if ($mois==4){
    $nbj=30;
}
elseif($mois==6){
    $nbj=30;
} 
elseif($mois==9){
    $nbj=30;
}
elseif($mois==11){
    $nbj=30;
}
elseif ($mois==2) {
    if ($annee%4==0) {
        $nbj=29;
    }
    else {
        $nbj=28;
       }
}
else {
    $nbj=31;
}
echo("le nombre de jour du mois est : ".$nbj."<br>");
echo("Il s'agit de l'année $annee");













?>