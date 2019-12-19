<?php
//auteur:Esteban
//date:25.11.2019
//titre:Tableau html simple
//version:1.0
//Description:exercice Array et String

echo '<link rel="stylesheet" type="text/css" href="../CSS/Tableau_HTML_simple_CSS.css">';


//crée la table
echo '<table>';

//ecrire le mois
echo date("F") . "<br>";


//création du tableau
$tableauDate = array();

$y = 1;

//boucle while qui ecrit le tableau de 1 a 31
while ($y < 32) {
    $tableauDate[$y] = $y;


    //condition qui change la couleur 1 fois sur 2
    if ($y % 2 != 1) {
        echo "<td class='carreBleu'>$tableauDate[$y]</td>";
    } else {
        echo "<td class='carreNormale'>$tableauDate[$y]</td>";
    }

    //condition qui fait que tous les 7 il descend d'une ligne
    if ($y == 7 || $y == 14 || $y == 21 || $y == 28) {
        echo "<tr><td></td></tr>";
    }

    //incrémente de 1 ma variable $y
    $y++;
}

//ferme la table
echo '</table>';
?>










