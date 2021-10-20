<?php /**
 * ecrire un script qui genere 3 nombres 
 * puis les tri dans l'ordre décroissant
 */


$nombre_1=rand(1,10);
$nombre_2=rand(1,10);
$nombre_3=rand(1,10);
$premier="";
$deuxieme="";
$troisieme="";

if(($nombre_1<$nombre_2) && ($nombre_2<$nombre_3)){
    $premier=$nombre_3;
    $deuxieme=$nombre_2;
    $troisieme=$nombre_1;
}
elseif (($nombre_1>$nombre_2) && ($nombre_2>$nombre_3)){
    $premier=$nombre_1;
    $deuxieme=$nombre_2;
    $troisieme=$nombre_3;
    
}
elseif (($nombre_1>$nombre_2) && ($nombre_2>$nombre_3)){
    $premier=$nombre_1;
    $deuxieme=$nombre_2;
    $troisieme=$nombre_3;
    
}
elseif (($nombre_1>$nombre_3) && ($nombre_3>$nombre_2)){
    $premier=$nombre_1;
    $deuxieme=$nombre_3;
    $troisieme=$nombre_2; 
    
}
elseif (($nombre_2>$nombre_3) && ($nombre_3>$nombre_1)){
    $premier=$nombre_2;
    $deuxieme=$nombre_3;
    $troisieme=$nombre_1;
    
}
elseif (($nombre_3>$nombre_1) && ($nombre_1>$nombre_2)){
    $premier=$nombre_3;
    $deuxieme=$nombre_1;
    $troisieme=$nombre_2;
}
else {
    echo("deux nombres sont identiques <br>");
}
echo("l'ordre est $premier,$deuxieme,$troisieme");





?>