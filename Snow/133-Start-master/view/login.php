<?php
/**
 * 133-Start-master - login.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 06.01.2020 09:21
 */

//ouverture MEMOIR TAMPONT  (tout ce qui se situera en dessous sa va le sauvgarder)
ob_start();
$titre="Rent A Snow - Login";
?>


<form class="form" method='POST' action="index.php?action=login">
    <label>Utilisateur</label>
    <input type="text" name="username" placeholder="Enter Username" id="username" required>
    <br>
    <label>Mot de passe</label>
    <input type="text" name="password" placeholder="Enter Password" id="password" required>
    <br>
    <input type="submit" name="boutton">
</form>

<?php

$username=@$_POST['username'];
$password=@$_POST['password'];


/*
//si il ne remplit dans les deux champ(A SOIVOIR ON PEUT AUSSI LE FAIR DANS LE controler.php ICI -> $username=@$_POST['username']; METTRE UN ISSET A LA PLACE DU @
if(empty($username) && empty($password)){
    echo "Les deux doivent être remplis";
}
*/


// ob_get_clean va clotturer puis $content va valoire tous se qu'il y a depuis ob_start
$content = ob_get_clean();


//appelle le ficher et faut que gabarit.php exicte IMPORTANT
require "gabarit.php";








