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


        if (isset($_POST['test']))
        {
            $result=$_POST['test'];
            echo $result . "<br>";
            echo date("o");
        }
        else
        {
            $result=$tableauMois[date("m") - 1];
        }

        ?>

        <?php

        //affiche le mois en francais par rapport a l'index du tableau : $tableauMois

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
    if (isset($_POST['test']))
    {

        //////////////////////////////////////////////////////////////////////////////
        //tableau des jours en nombre
        $tableauNumJour = array();

        //boucle for qui aligne le jour avec le bon chiffre
        for($w=1;$w < 8-date("N");$w++){
            echo"<li></li>";
        }


        //boucle qui va afficher les 31 jours et qui va mettre en valeur le jour actuelle
        for ($a = 1; $a < date("t"); $a++) {

            $tableauNumJour[$a] = $a;

            //condition qui va mettre en valeur le jour actuelle
            if ($a == date("d")) {
                echo '<li><span class="active">' . $tableauNumJour[$a] . '</span>';
            } else {
                echo '<li>';
                echo $tableauNumJour[$a];

            }
        }
        //////////////////////////////////////////////////////////////////////////////////////
    }
    else
    {
        $result=$tableauMois[date("m") - 1];
    }


    ?>
</ul>
<form method="POST" action="/PHP/Calandrier_sans_tableau.php">

    <select name="test">
        <option><?= $tableauMois[0]?></option>
        <option><?= $tableauMois[1]?></option>
        <option><?= $tableauMois[2]?></option>
        <option><?= $tableauMois[3]?></option>
        <option><?= $tableauMois[4]?></option>
        <option><?= $tableauMois[5]?></option>
        <option><?= $tableauMois[6]?></option>
        <option><?= $tableauMois[7]?></option>
        <option><?= $tableauMois[8]?></option>
        <option><?= $tableauMois[9]?></option>
        <option><?= $tableauMois[10]?></option>
        <option><?= $tableauMois[11]?></option>
    </select>

    <input type="submit">
</form>

</body>
</html>

