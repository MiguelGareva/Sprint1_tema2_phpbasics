<?php 
declare(strict_types=1);

define($CHOCO_PRICE, 1);
define($GUM_PRICE, 0.5);
define($CANDY_PRICE, 1.5);

function calcularChoco(int $numChoco):float{
    global $CHOCO_PRICE;
    return $numChoco * $CHOCO_PRICE;
}

function calcularChicle(int $numChicle):float{
    global $GUM_PRICE;
    return $numChicle * $GUM_PRICE;
}

function calcularCaramelo(int $numCandy):float{
    global $CANDY_PRICE;
    return $numCandy * $CANDY_PRICE;
}

function calcularTotalCompra(int $numChoco, int $numChicle, int $numCandy):float{
    $total = calcularChoco($numChoco) + calcularChicle($numChicle) + calcularCaramelo($numCandy);
    return $total;
}
?>