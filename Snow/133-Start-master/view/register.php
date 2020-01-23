<?php
/**
 * 133-Start-master - register.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.01.2020 09:12
 */

//ouverture MEMOIR TAMPONT  (tout ce qui se situera en dessous sa va le sauvgarder)
ob_start();
$titre="Rent A Snow - Register";
?>


    <form class="form" method='POST' action="index.php?action=register">
        <label>Utilisateur</label>
        <input type="text" name="Username" placeholder="Enter Username" id="Username" required>
        <br>
        <label>Mot de passe</label>
        <input type="text" name="Password" placeholder="Enter Password" id="Password" required>
        <br>
        <input type="submit" name="boutton">
    </form>

<?php


// ob_get_clean va clotturer puis $content va valoire tous se qu'il y a depuis ob_start
$content = ob_get_clean();


//appelle le ficher et faut que gabarit.php exicte IMPORTANT
require "gabarit.php";
