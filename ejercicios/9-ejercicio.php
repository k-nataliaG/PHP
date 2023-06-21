<?php

$cal = intval(readline("Ingrese Calificacion  \n"));

if ($cal >= 90):
    echo "su calificacion es sobresaliente";

    elseif (($cal >= 60) && ($cal <= 89)):
        echo "su calificacion es aprobo";
    else:
        echo "su calificacion es reprobo";

endif;

?>