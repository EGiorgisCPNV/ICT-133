<?php

require "model/model.php";
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


function login(){

    $_GET['action']="login";
    $username=@$_POST['username'];
    $password=@$_POST['password'];

    if(checkLogin($username,$password)){
        require "view/home.php";
    }
    else
        require "view/login.php";


}

function produit(){
    $_GET['action']="produit";
    require "view/produit.php";
}