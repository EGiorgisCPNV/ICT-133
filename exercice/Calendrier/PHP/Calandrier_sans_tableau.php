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
        echo "2019";

        /* je ne l'utilise pas car je n'arrive pas a acorder les jour au mois ET avec l'année choisie
        $year = $_GET['Year'];
        echo $year."<br>";
*/

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

//si il a choisis un mois alors il rentre dans la contition
if (isset($month)) {
    switch ($month) {
        case $tableauMois[0]:
            $JanA = 2;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois (2 car le premier jour du mois est un mardi)
            $JanB=31;
            jourEcrit($JanA,$JanB);
            break;

        case $tableauMois[1]:
            $FevA = 5;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $FevB = 28;
            jourEcrit($FevA,$FevB);
            break;

        case $tableauMois[2]:
            $MarA=5;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $MarB = 31;
            jourEcrit($MarA,$MarB);
            break;

        case $tableauMois[3]:
            $AvrA=1;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $AvrB = 30;
            jourEcrit($AvrA,$AvrB);
            break;

        case $tableauMois[4]:
            $MaiA=3;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $MaiB = 31;
            jourEcrit($MaiA,$MaiB);
            break;

        case $tableauMois[5]:
            $JuinA=6;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $JuinB = 30;
            jourEcrit($JuinA,$JuinB);
            break;

        case $tableauMois[6]:
            $JuilletA=1;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $JuilletB = 31;
            jourEcrit($JuilletA,$JuilletB);
            break;

        case $tableauMois[7]:
            $AouA=4;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $AouB = 31;
            jourEcrit($AouA,$AouB);
            break;

        case $tableauMois[8]:
            $SepA=7;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $SepB = 30;
            jourEcrit($SepA,$SepB);
            break;

        case $tableauMois[9]:
            $OctA=2;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $OctB = 31;
            jourEcrit($OctA,$OctB);
            break;

        case $tableauMois[10]:
            $NovA=5;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $NovB = 30;
            jourEcrit($NovA,$NovB);
            break;

        case $tableauMois[11]:
            $DecA=7;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $DecB = 31;
            jourEcrit($DecA,$DecB);
            break;
    }
} else {
    //si il lance depuis cette page a savoir "Calandrier_sans_tableau.php" il va automatiquement le rediriger sur la page "controller.php"
    header('Location: /PHP/controller.php');
}

// cette fonction va aligner le nombre du jour au bon jour
function jourEcrit($Element,$Element2)
{
  $i=1;
    //boucle for qui aligne le jour avec le bon chiffre
    while ( $i< $Element) {
        echo "<li></li>";
        $i++;
    }


    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a <= $Element2; $a++) {
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


