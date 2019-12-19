<?php
/**
 * 133-Start-master - controler.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.12.2019 14:41
 */

/**
 * Function to redirect the user to the home page
 *  (epending the action received by the index)
 */

//fonction pour afficher tout les detail du mois de janvier
function Janvier(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= date("t"); $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}

§

//fonction pour afficher tout les detail du mois de fevrier
function Fevrier(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 7-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de mars
function Mars(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de avril
function Avril(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de mai
function Mai(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de join
function Join(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de juillet
function Juillet(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de aout
function Aout(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de septembre
function Septembre(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de octobre
function Octobre(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de novembre
function Novembre(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}



//fonction pour afficher tout les detail du mois de decembre
function Decembre(){
    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= 28; $a++) {

        $tableauNumJour[$a]= $a;

        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("j")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }

}