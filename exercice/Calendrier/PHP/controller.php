<form method="GET" action="Calandrier_sans_tableau.php">
    <select name="Month">
        <option >sdfds</option>
        <option >asd</option>
        <option >sd</option>
    </select>
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

?>
<a href="Calandrier_sans_tableau.php?val=<?= $month; ?>"></a>


<?php

