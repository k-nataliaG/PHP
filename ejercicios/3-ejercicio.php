<?php

$numero = intval(readline("ingrese numero \n "));

$lun = 1;
$mar = 2;
$mie = 3;
$jue = 4;
$vie = 5; 
$sab= 6;
$dom = 7;

if ($numero == $lun):
    echo "lunes";
elseif ($numero == $mar):
    echo "martes";

elseif ($numero == $mie):
    echo "miercoles";

elseif ($numero == $jue):
    echo "jueves";
elseif ($numero == $vie):
    echo "viernes";
elseif ($numero == $sab):
    echo "sabado";
elseif ($numero == $dom):
    echo "domingo";
endif;


?>