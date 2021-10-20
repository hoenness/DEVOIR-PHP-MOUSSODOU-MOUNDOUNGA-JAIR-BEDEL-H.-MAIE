<?php /**
 * ecrire un script qui génère,un jour, un mois, une annee,
 * puis détermine et affiche la date suivante et la date précédante. 
 */
define("maxa", 2030);
define("mina", 2000);
$annee = rand(maxa, mina);

define("MAXM",12);
define("MINM",1);
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
if ($jour<$nbj) {
    $jour_lendemain=$jour+1;
    $jour_precedent=$jour-1;
    $mois_lendemain=$mois;
    $annee_lendemain=$annee;
}
if ($mois==12) {
    if ($jour=$nbj) {
        $jour_lendemain=1;
    }
    else {
        $jour_lendemain=$jour+1;
    }
    
    if ($mois<12) {
        $mois_lendemain==$mois+1;
        $annee_lendemain==$annee;
    }
    else {
        $mois_lendemain=1;
        $annee_lendemain=$annee+1;
    }
}
if ($jour==1) {
    if ($mois=1) {
        $jour_precedent=31;
        $mois_precedent=12;
        $annee_precedent=$annee-1;
    }
    else {
        if ($mois==3) {
           if ($annee%4==0) {
               $jour_precedent=29;
           } 
           else {
               $jour_precedent=28;
           }
           $mois_precedent=2;
           $annee_precedent=$annee;
        }
        else {
        if ($mois==5) {
            $jour_precedent=30;
         }
        if ($mois==7) {
            $jour_precedent=30;
        }
        if ($mois==10) {
            $jour_precedent=30;
        }
        if ($mois==12) {
            $jour_precedent=30;
        }
         else {
             $jour_precedent=31;
             $mois_precedent=$mois-1;
             $annee_precedent=$annee;
         }
        }
    }
}

else {
    $jour_precedent=$jour-1;
    $mois_precedent=$mois;
    $annee_precedent=$annee;
}
echo(" la date du jour est : ".$jour."/".$mois."/".$annee."<br>");
echo("la date précedente est : ".$jour_precedent."/".$mois_precedent."/".$annee_precedent."<br>");
echo("la date suivante est: ".$jour_lendemain."/".$mois_lendemain."/".$annee_lendemain);



















?>