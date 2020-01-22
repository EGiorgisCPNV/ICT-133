<?php
/**
 * 133-Start-master - produit.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.01.2020 14:52
 */


// tampon de flux stocké en mémoire
ob_start(); // Ouvre la mémoire tampon , tout ce qui est après ob_start sera dans la variable tampon
$titre = "Rent A Snow - Acceuil";

$json = file_get_contents("model/produit.json");
$json_decode = json_decode($json, true);



?>
    <html lang="fr">
    <table width="100%" border="3px blue dashed">
        <tr>
            <th><h2 style="background-color: #2ECCFA"> Brand</h2></th>
            <th><h2 style="background-color: #2ECCFA">Model</h2></th>
            <th><h2 style="background-color: #2ECCFA">Lenght</h2></th>
            <th><h2 style="background-color: #2ECCFA">Price</h2></th>
            <th><h2 style="background-color: #2ECCFA">qtyAvailable</h2></th>
        </tr>
        <?php
        foreach ($json_decode as $colonne) {

            echo "<tr>";
            echo "<br>";
            //collone Brand
            echo '<td align="center" bgcolor="#AEB5B4"><DIV class="dateclass">' . $colonne['brand'] . '</DIV>';
            echo "</td>";


            //collone Model
            echo '<td align="center" bgcolor="#AEB5B4">' . $colonne['model'];
            echo "</td>";


            //collone Lenght
            echo '<td align="center" bgcolor="#AEB5B4">' . $colonne['length'];
            echo "</td>";


            //collone Price
            echo '<td align="center" bgcolor="#AEB5B4">' . $colonne['price'];
            echo "</td>";

            //collone Quantity_Available
            echo '<td align="center" bgcolor="#AEB5B4">' . $colonne['qtyAvailable'];
            echo "</td>";
            echo "</tr>";

        }

        echo '</table>';
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        ?>


    </html>


<?php
$content = ob_get_clean(); // Libére la mémoire tampon dans une variable $content, donc tout ce qui est entre le ob_open et le ob_get_clean va dans la variable tampon
require "gabarit.php"; // Appele le fichier, il faut que le fichier existe pour que sa fonctionne

