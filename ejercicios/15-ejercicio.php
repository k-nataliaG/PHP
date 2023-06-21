<?php

$valcom = intval(readline("VALOR COMPRA:  \n "));

$DESCUENTO1 = $valcom*0.10;
$DESCUENTO2  = $valcom*0.05;


if ($valcom >= 1000):
    $des1 = ($valcom - $DESCUENTO1);
    echo "su total a pagar es de = $des1";
    elseif(($valcom >= 500)&&($valcom <=900)):
        $des2 = ($valcom - $DESCUENTO2);
        echo "su total a pagar es de = $des2";
    else:
        echo"Su total a Pagar es = $valcompra";
endif;

?>