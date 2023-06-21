<?php

$num1 = intval(readline("Ingrese Primer Numero \n   "));
$num2 = intval(readline("Ingrese Segundo Numero \n  "));

if (($num1 > 10 ) && ($num2 > 10 )):
    echo "los numeros son mayores que 10";

elseif (($num1 > 10 ) && ($num2 <= 9)):
    echo "solo el primer numero es mayor que 10";

    elseif (($num1 <= 9) && ($num2 > 10)):
        echo " solo el segundo numero es mayor que 10";

    else:
        echo "Ninguno de los dos numeros son mayores que 10";
endif;

?>