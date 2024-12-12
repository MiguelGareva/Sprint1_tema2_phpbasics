<?php
declare(strict_types=1);

$x = 5;
$y = 7;

$m = 3.1416;
$n = 9.25;

echo "X = " . $x . ", Y = " . $y . "<br>";
echo $x . " + " . $y . " = " . $x + $y . "<br>";
echo $x . " - " . $y . " = " . $x - $y . "<br>";
echo $x . " * " . $y . " = " . $x * $y . "<br>";
echo $x . " / " . $y . " = " . $x / $y . "<br>" . "<br>";

echo "M = " . $m . ", N = " . $n . "<br>";
echo $m . " + " . $n . " = " . $m + $n . "<br>";
echo $m . " - " . $n . " = " . $m - $n . "<br>";
echo $m . " * " . $n . " = " . $m * $n . "<br>";
echo $m . " / " . $n . " = " . $m / $n . "<br>" . "<br>";

echo "Doble de X = " . $x*2 . ", de Y = " . $y*2 . ", de M = " . $m*2 . ", de N = " . $n*2 . "<br>";
echo "La suma de todos los valores es = " . $x + $y + $m + $n . "<br>";
echo "El producto de todos los valores es = " . $x * $y * $m * $n . "<br>";

function Calcular(float $num1, float $num2, string $operador) : mixed{

    $resultado = "";

    switch ($operador) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            $resultado = $num1 / $num2;
            break;
        default:
            echo "Error";
            break;
    }

    return $resultado;
}

?>