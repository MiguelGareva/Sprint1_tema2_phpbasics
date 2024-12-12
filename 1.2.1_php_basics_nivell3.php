<?php 

declare(strict_types=1);

function calcularEratostenes(int $num):void{

    for ($i = 2; $i <= $num; $i++) { 
        $numPrimo = true;
        for ($j=2; $j * $j <= $i; $j++) { 
            if ($i % $j == 0) {
                $numPrimo = false;
            }   
        }
        if ($numPrimo){
            echo $i . "  ";
        }
    }
}

?>