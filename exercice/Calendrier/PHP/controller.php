<form method="GET" action="Calandrier_sans_tableau.php">
    <input type="text" name="Month">
    <input type="submit">
</form>

<?php
if (isset($_GET['Month'])) {
    $month = $_GET['Month'];
} else {
    $month = "Aucun mois choisi";
}

?>
<a href="Calandrier_sans_tableau.php?val=<?= $month; ?>"></a>


<?php
/**
 * 133-Start-master - controler.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.12.2019 14:41
 */

/**
 * Function to redirect the user to the home page
 *  (epending the action received by the index)
 */
