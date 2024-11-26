<?php

$valor1 = 20;
$valor2 = 15;

    if($valor2 < $valor1) {
        for($contador = $valor1; $contador >= $valor2; $contador--) {
            echo $contador, "<br>";
        }
    }else {
        for($contador = $valor2; $contador >= $valor1; $contador--) {
            echo $contador, "<br>";
        }
    }

 ?>