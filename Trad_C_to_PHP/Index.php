<?php

$value=20;
$step=3;
$i=0;


while($i<10){
    if($value>=30){
        print_r("La valeur vaut $value \n");

    }
    else
    {
        print_r("nombre trop petit \n");
    }

    $value+=$step;
    $i++;
}


?>