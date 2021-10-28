<?php
/*
Ecrire un script qui initialise un tableau d'entiers et génère une valeur
val. Le script vérifie l'existance de la valeur val dans le tableau
*/

$tableau = [1,0,3,8,7,12];
define  ("MIN",0);
define  ("MAX",12);

$val = rand(MIN,MAX);

foreach ($tableau as $value) {
    
    echo("$value<br>");
}
echo("$val<br>");

foreach ($tableau as $key => $value){
    if($val == $value){
        echo("La valeur val existe dans le tableau à la position $key et de valeur $val");
    
    }
}
