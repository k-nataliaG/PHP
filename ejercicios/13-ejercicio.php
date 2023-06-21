<?php

$letra = strval(readline("Ingrese Letra \n "));

$a1 = "a";
$e2 = "e";
$i3 = "i";
$o4 = "o";
$u5 = "u";


$let =(($letra == $a1)||($letra==$e2)||($letra==$i3)||($letra==$o4)||($letra==$u5))? "una vocal" : "una consonante";

    echo "La letra es $let ";
?>



