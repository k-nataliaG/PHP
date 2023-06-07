<?php
$nombretrabajador= readline("ingrese nombre trabajador\n");
$sueldotrabajador= readline("ingrese sueldo trabajador\n");
$sumaporcentaje= $sueldotrabajador * 15/100;
$suma= $sueldotrabajador + $sumaporcentaje;

echo "señor $nombretrabajador actualmente su sueldo tiene un valor de $sueldotrabajador mas la suma del 15% por ser tan trabajador le da un total de $suma "


?>