<?php 
declare(strict_types=1);
function isBitten() : bool{

    $bite = rand(1,100);

    if ($bite >=1 && $bite <= 50){
        $bitten = true;
    } else {
        $bitten = false;
    }

    return $bitten;
} 

if (isBitten()){
    echo "Charlie bit me!";
} else {
    echo "Charlie didn't bite me.";
}

?>