<?php

$cal = intval(readline("Ingrese calificacion: \n  "));

if (($cal >= 90) && ($cal <= 100)):
    echo "su calificacion es EXCELENTE!... \n ";
    
    elseif (($cal >= 80) && ($cal <= 89)):
        echo "su calificacion es BUENA!... \n ";
    elseif (($cal >= 70) && ($cal <= 79)):
            echo "su calificacion es REGULAR!... \n ";
    elseif(($cal >= 60) && ($cal <= 69)):
                echo "su calificacion es APROBADO!... \n ";
    else:
                echo "su calificacion es REPROBO!... \n ";
endif;

?>