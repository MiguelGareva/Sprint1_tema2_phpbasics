<?php 
declare(strict_types=1);

function calcularCosteLlamada(float $minutos):float{

    if ($minutos > 3) {
        $coste = ($minutos - 1) + 5;
    } else {
        $coste = 10;
    }

    return $coste / 100;
}

?>