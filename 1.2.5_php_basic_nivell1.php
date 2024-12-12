<?php
declare(strict_types=1);

function verificarGrado(int $nota) : void {

    if ($nota > 60) {
        echo "El grado de tu nota es de primera división.";
    }elseif ($nota >= 45) {
        echo "El grado de tu nota es de segunda división.";
    }elseif ($nota >= 33) {
        echo "El grado de tu nota es de tercera división.";
    }else {
        echo "Lo siento, estás reprovado.";
    }


}

?>