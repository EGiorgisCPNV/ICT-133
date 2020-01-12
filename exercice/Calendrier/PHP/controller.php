<form method="GET" action="Calandrier_sans_tableau.php">
    <select name="Month">
        <option >Janvier</option>
        <option >Fevrier</option>
        <option >Mars</option>
        <option >Avril</option>
        <option >Mai</option>
        <option >Juin</option>
        <option >Juillet</option>
        <option >Aout</option>
        <option >Septembre</option>
        <option >Octobre</option>
        <option >Novembre</option>
        <option >Decembre</option>
    </select>
    <input type="number" name="Year">
    <input type="submit">
</form>

<?php
/**
 * 133-Start-master - controler.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.12.2019 14:41
 */
$month = @$_GET['Month'];
$year = @$_GET['Year'];



?>
<a href="Calandrier_sans_tableau.php?val=<?= $month; ?>"></a>


<?php

