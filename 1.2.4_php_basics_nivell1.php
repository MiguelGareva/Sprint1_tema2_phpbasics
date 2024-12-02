<?php
declare(strict_types=1);

function Contar(int $incremento, $numFinal = 10) : void {

    for ($i=0; $i <= $numFinal ; $i += $incremento) { 
        echo $i . "<br>";
    }
}

?>