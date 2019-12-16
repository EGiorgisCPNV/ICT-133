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
function home(){
    $_GET['action']="home";
    require "view/home.php";
}
