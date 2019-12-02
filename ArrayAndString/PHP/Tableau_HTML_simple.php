<?php
echo '<link rel="stylesheet" type="text/css" href="../CSS/DemoArrayCSS.css>';
//auteur:Esteban
//date:25.11.2019
//titre:Tableau html simple
//version:1.0
//Description:exercice Array et String


/* pour voir les info de ta version de php <?php phpinfo();?>*/
echo '<table>';

//ecrire le mois
echo date("F") . "<br>";


//création du tableau
$tableauDate = array();

// boucle for qui écrit de 1 a 31
for ($y = 1; $y < 32; $y++) {
    $tableauDate[$y] = $y;


    //condition qui change la couleur 1 fois sur 2
    if($y%2!=1){
        echo "<td class='carreBleu'>$tableauDate[$y]</td>";
    }
    else {
        echo "<td class='carreNormale'>$tableauDate[$y]</td>";
    }

    //condition qui fait que tous les 7 il descend d'une ligne
    if ($y == 7 || $y == 14 || $y == 21 || $y == 28) {
        echo "<tr><td></td></tr>";
    }


}




echo '</table>';
?>










