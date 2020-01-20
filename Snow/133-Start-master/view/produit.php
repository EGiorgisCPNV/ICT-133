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
$parsed_json = json_decode($json, true);



?>
    <html lang="fr">
    <table width="100%">
        <tr>
            <th><h3 style="background-color: #aeb5b4">Brand</h3></th>
            <th><h3 style="background-color: #aeb5b4">Model</h3></th>
            <th><h3 style="background-color: #aeb5b4">Lenght</h3></th>
            <th><h3 style="background-color: #aeb5b4">Price</h3></th>
        </tr>
        <?php
        foreach ($parsed_json as $v) {

            echo "<tr>";
            echo '<td align="center" bgcolor="#AEB5B4"><DIV class="dateclass">' . $v['brand'] . '</DIV>';
            echo "</td>";
            //deuxieme colonne
            echo '<td align="center" bgcolor="#AEB5B4">' . $v['model'];
            echo "</td>";
            //troisieme colonne
            echo '<td align="center" bgcolor="#AEB5B4">' . $v['length'];
            echo "</td>";
            // 4eme colonne
            echo '<td align="center" bgcolor="#AEB5B4">' . $v['price'];
            echo "</td>";
            echo "</tr>";

        }

        echo '</table>';

        ?>


    </html>


<?php
$content = ob_get_clean(); // Libére la mémoire tampon dans une variable $content, donc tout ce qui est entre le ob_open et le ob_get_clean va dans la variable tampon
require "gabarit.php"; // Appele le fichier, il faut que le fichier existe pour que sa fonctionne

