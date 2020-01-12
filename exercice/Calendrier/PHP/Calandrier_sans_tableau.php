<!--auteur:Esteban-->
<!--titre:Calendrier sans tableau-->
<!--date:25.11.2019-->
<!--version:1.0-->
<!--Description:exercice Array et String-->


<!DOCTYPE html>
<html>
<head>
    <title>Calandrier sans tableau</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Calandrier_sans_tableau_CSS.css">
</head>
<body>


<h1>CSS Calendar</h1>


<!-- affiche le mois actuelle en lettre-->
<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>

        <?php


        //Tableau des mois
        $tableauMois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

        $month = $_GET['Month'];
        echo $month . "<br>";
        $year = $_GET['Year'];
        echo $year."<br>";

        //emplacement du premier hour du moi de janvier
        echo date("w",mktime(0,0,0,1,1,$year));

        ?>

    </ul>
</div>

<!-- affiche les jours en lettre-->
<ul class="weekdays">
    <?php
    //Tableau associatif des jours
    $tableauJour = array(
        'Lundi' => 'Lun',
        'Mardi' => 'Mar',
        'Mercredi' => 'Mer',
        'Jeudi' => 'Jeu',
        'Vendredi' => 'Ven',
        'Samedi' => 'Sam',
        'Dimanche' => 'Dim'
    );

    //Va chercher chaque ellement du tableau associatif : $tableauJour en créer a chaque fois un <li>
    foreach ($tableauJour as $element) {
        echo "<li>$element</li>"; //affichera $jours[0],etc…
    }
    ?>
</ul>

<!-- affiche les jours en chiffre-->

<ul class="days">
<?php

//controller dois exister pour que se qui se passe en dessous puisse fonctionner


if (isset($month)) {
    switch ($month) {
        case $tableauMois[0]:
            $Jan = 31;
            jourEcrit($Jan);
            break;

        case $tableauMois[1]:
            $Fev = 28;
            jourEcrit($Fev);
            break;

        case $tableauMois[2]:
            $Mar = 31;
            jourEcrit($Mar);
            break;

        case $tableauMois[3]:
            $Avr = 30;
            jourEcrit($Avr);
            break;

        case $tableauMois[4]:
            $Mai = 31;
            jourEcrit($Mai);
            break;

        case $tableauMois[5]:
            $Juin = 30;
            jourEcrit($Juin);
            break;

        case $tableauMois[6]:
            $Juillet = 31;
            jourEcrit($Juillet);
            break;

        case $tableauMois[7]:
            $Aou = 31;
            jourEcrit($Aou);
            break;

        case $tableauMois[8]:
            $Sep = 30;
            jourEcrit($Sep);
            break;

        case $tableauMois[9]:
            $Oct = 31;
            jourEcrit($Oct);
            break;

        case $tableauMois[10]:
            $Nov = 30;
            jourEcrit($Nov);
            break;

        case $tableauMois[11]:
            $Dec = 31;
            jourEcrit($Dec);
            break;
    }
} else {
    //si il lance depuis cette page a savoir "Calandrier_sans_tableau.php" il va automatiquement le rediriger sur la page "controller.php"
    header('Location: /PHP/controller.php');
}

// cette fonction va aligner le nombre du jour au bon jour
function jourEcrit($Element)
{
    //boucle for qui aligne le jour avec le bon chiffre
    for ($w = 1; $w < 8 - date("N"); $w++) {
        echo "<li></li>";
    }


/*
    ///////////////////////////IMPORTANT
    echo date("m", mktime(0, 0, 0, 7, 1, 2000));
    //////////////////////////////////////////////////////////////////
*/




    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= $Element; $a++) {
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

////////////////////////////////////////////////////////////////////////////////////

