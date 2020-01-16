<?php
/**
 * 133-Start-master - model.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.01.2020 15:03
 */


//cette fonction va verifier si $element1 égale a abc et que $element2 egale a 1234
function checkLogin($element1,$element2){

    //chemin d'accès au fichier json
    $fileJson='view/stockage.json';

//$dataFileJson contiant tout ce qu'il y a dans le fichier json (stockage.json)
    $dataFileJson=file_get_contents($fileJson);

    $obj = json_decode($dataFileJson);

    if($element1==$obj[0]->name && $element2==$obj[1]->name){
        return true;
    }
    else
        return false;

}


function register($element1,$element2){
    //chemin d'accès au fichier json
    $fileJson='view/stockage.json';

//$dataFileJson contiant tout ce qu'il y a dans le fichier json (stockage.json)
    $dataFileJson=file_get_contents($fileJson);

    $obj= json_decode($dataFileJson);


}