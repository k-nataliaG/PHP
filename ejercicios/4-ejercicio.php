<?php

$edad = intval(readline("ingrese su edad:  \n "));

if ($edad >= 18):
    ($lice = strval(readline("¿Tiene licencia de conducción: ? \n ")));

    if ($lice == "si"):
    echo "¡usted puedes conducir!  \n ";
    elseif ($lice == "no"):
        echo "¡necesita una licencia para poder conducir! \n ";   
    endif;
else:
    echo "¡usted no tiene edad para conducir! \n ";
endif

?>
