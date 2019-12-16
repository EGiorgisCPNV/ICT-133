<?php
/**
 * 133-Start-master - index.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.12.2019 14:23
 */


require "controler/controler.php";

if(isset ($_GET['action'])){
    $Action=$_GET['action'];
    switch($Action){
        case 'home':
            home();
            break;
        case 'contact':
            contact();
            break;

            default:
            home();
    }

}
    else{
        home();
}

    ?>