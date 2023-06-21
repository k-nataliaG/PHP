<?php

$num = intval(readline("Ingrese Numero:  \n"));

if ($num > 0 ):
    echo "El numero es Positivo";
    elseif ($num === 0):
        echo "El numero es un Cero";
    else: 
        echo "El numero es Negativo";
endif;




