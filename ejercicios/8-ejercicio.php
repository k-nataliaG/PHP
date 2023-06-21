<?php

$num = intval(readline("Ingrese Numero \n"));

$div = (($num % 3)== 0 && ($num % 5) == 0 ) ? "El num es divisible por 3 y por 5" : "El numero no es divisible por 3 y por 5";

echo "$div";

?>