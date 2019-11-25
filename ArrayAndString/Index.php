<?php
echo '<link href="test.css" type="text/css" rel="stylesheet">';
echo '<link rel="stylesheet" type="text/css" href="indexcss.css">';
//auteur:Esteban
//date:25.11.2019
//Description:exercice Array et String

/* pour voir les info de ta version de php <?php phpinfo();?>*/
echo '<table>';

echo date("M") . "<br>";

$tableauDate = array();

for ($y = 1; $y < 31; $y++) {
    $tableauDate[$y] = $y;

    echo "<td >$tableauDate[$y]</td>";

    if ($y == 7 || $y == 14 || $y == 21 || $y == 28) {
        echo "<tr><td></td></tr>";
    }


}

echo '</table>';
?>





