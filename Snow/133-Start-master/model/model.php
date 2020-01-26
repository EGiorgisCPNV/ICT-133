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


//condition qui va vérifier si l'utilisateur a deja remplit 1 voir les deux champs remplissable dans $element1
    if (isset ($element1)) {

        // ce foreach sert a aller vérifier chaque tableau du fichier json (stockage.json)
        foreach ($obj as $cle) {

            //le while est improtant car si on met un if il va vérifier que le premier tableau du fichier json tant dis que le while laisse le temps au foreach de tout verifier le fichier json
            while ($element1["username"] == $cle["Utilisateur"] && $element1["password"] == $cle["Password"]) {
                return true;
            }
        }
        echo "Utilisateur ou votre mot de passe est erroné";
    }
    else
    return false;
}

// cette fonction va aligner le nombre du jour au bon jour
function jourEcrit($Element, $Element2, $Element3)
{
    $boucle = 1;
    //boucle for qui aligne le jour avec le bon chiffre
    while ($boucle < $Element) {
        echo "<li></li>";
        $boucle++;
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= $Element2; $a++) {
        $tableauNumJour[$a] = $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("d") && $Element3 == date("F")) {
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

    //chemin d'accès au fichier json
    $fileJson = 'model/stockage.json';

    //cette condition va vérifier si il y a deja des données dans le fichier si oui alors rajoute un nouveau tableau en laissant celui qui y est/sont deja sinon inscrit le tableau dans le fichier
    if (file_get_contents($fileJson) == "") {

        //Attention les crochets dans se cas sont importants car sinon il va ajouter des numero pour chaque tableau ajouter
        $data = array([
            "Utilisateur" => @$_POST['Username'],
            "Password" => @$_POST['Password']
        ]);
        $dataEncode = json_encode($data, true);

        file_put_contents($fileJson, $dataEncode);
    } else {

        $data = array(
            "Utilisateur" => @$_POST['Username'],
            "Password" => @$_POST['Password']
        );
        $tempArray = file_get_contents($fileJson);
        $tempArray = json_decode($tempArray, true);
        array_push($tempArray, $data);
        $data = json_encode($tempArray, true);
        file_put_contents($fileJson, $data);

    }

echo "Votre compte a bien été créé";
}



//cette fonction sert a afficher les numéro des jour au bon jour au mois actuelle
function showCurrentDay(){


    $boucle = 0;//variable de bouclage

    //boucle for qui aligne le jour avec le bon chiffre
    while ( $boucle<= 8-date("N") ) {
        echo "<li></li>";
        $boucle++;
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= date("t"); $a++) {
        $tableauNumJour[$a] = $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("d")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];
        }
    }
}



//cette fonction affiche l'en-tete du calendrier selon si un mois est choisis ou non et si oui par rapport au mois choisis
function enteteCalendar(){
    $month = @$_GET['Month'];//la variable $month va contenir l'element choisis du formulaire

    if(isset($month)){
        echo $month . "<br>";
        echo "2020";
    }
    else{
        echo date("F") . "<br>";
        echo "2020";
    }
}




//cette fonction affiche une image par rapport au mois choisis par l'utilisateur
function showMonthPicture($lien){

    echo("<img src=\"$lien\"/>");

}
