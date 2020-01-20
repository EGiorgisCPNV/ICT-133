<?php
/**
 * 133-Start-master - model.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.01.2020 15:03
 */


//cette fonction va verifier si $element1 égale a abc et que $element2 egale a 1234
function checkLogin($element1)
{

    //chemin d'accès au fichier json
    $fileJson = 'model/stockage.json';

//$dataFileJson contient tout ce qu'il y a dans le fichier json (stockage.json)
    $dataFileJson = file_get_contents($fileJson);

    $obj = json_decode($dataFileJson, true);


if(!isset ($element1)){
    foreach($obj as $cle){

        if ($element1["username"]==$cle["Utilisateur"] && $element1["password"]==$cle["Password"]) {
            return true;
        } else
        return false;

    }
}
else
    return false;
}


// cette fonction va aligner le nombre du jour au bon jour
function jourEcrit($Element, $Element2)
{
    $i = 1;
    //boucle for qui aligne le jour avec le bon chiffre
    while ($i < $Element) {
        echo "<li></li>";
        $i++;
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= $Element2; $a++) {
        $tableauNumJour[$a] = $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("d") && $Element2 == date("t")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];
        }
    }
}


//Cette fonction permet d'écrire ce que l'utilisateur rentre comme username et comme password dans le fichier json (stockage.json)
function creatUser()
{
    $_GET['action'] = "register";

    //chemin d'accès au fichier json
    $fileJson = 'model/stockage.json';

if(file_get_contents($fileJson)==""){
    $data = array(
        "Utilisateur" => @$_POST['username'],
        "Password" => @$_POST['password']

    );


    $dataEncode = json_encode($data, true);

    file_put_contents($fileJson, $dataEncode);
}
else{
    $data = array(
        "Utilisateur" => @$_POST['username'],
        "Password" => @$_POST['password']

    );

    $tempArray = file_get_contents($fileJson);
    $tempArray = json_decode($tempArray, true);
    array_push($tempArray, $data);
    $data = json_encode($tempArray, true);
    file_put_contents($fileJson, $data);

}


    require "view/register.php";


}