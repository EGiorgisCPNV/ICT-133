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

<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>

        <?php
        //Tableau des mois
        $tableauMois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

        //affiche le mois en farancais par rapport a l'index du tableau : $tableauMois
        echo $tableauMois[date("m") - 1] . "<br>";
        echo date("o");
        ?>
    </ul>
</div>

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


<ul class="days">
    <?php

    //tableau
    $tableauNumJour = array();

    //boucle for qui aligne le jour avec le bon chiffre
    for($w=1;$w < 8-date("N");$w++){
        echo"<li></li>";
    }

    //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
    for ($a = 1; $a < 31; $a++) {
        $tableauNumJour[$a] = $a;


        //condition qui va mettre en valeur le jour actuelle
        if ($a == date("d")) {
            echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
        } else {
            echo '<li>';
            echo $tableauNumJour[$a];

        }
    }


    ?>
</ul>

</body>
</html>

