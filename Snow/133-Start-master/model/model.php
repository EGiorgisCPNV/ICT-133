<?php
/**
 * 133-Start-master - model.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.01.2020 15:03
 */


//cette fonction va verifier si $element1 égale a abc et que $element2 egale a 1234
function checkLogin($element1,$element2){

    if($element1=="abc" && $element2==1234){
        return true;
    }
    else
        return false;

}