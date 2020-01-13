<?php
/**
 * 133-Start-master - controler.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.12.2019 14:41
 */

session_start();//ouvre la session

require "model/model.php";


/**
 * Function to redirect the user to the home page
 *  (epending the action received by the index)
 */
function home(){
    $_GET['action']="home";
    require "view/home.php";
}


/**
 * Function to redirect the user to the login page
 *  (epending the action received by the index)
 */
function login($post){

    $_GET['action']="login";


    $username=@$_POST['username'];//recuperer ce que l'utilisateur va rentrer comme username
    $password=@$_POST['password'];//recuperer ce que l'utilisateur va rentrer comme password


    //cette condition va checker ce que l'utilisateur va rentrer dans la page login est rediriger sur la page home si ce qu'il a rentrer correspond a la la fonction checkLogin dans le model.php sinon sur la page login sa sa ne corespond pas
    if(checkLogin($username,$password)){

        $_SESSION['MotCle']=$post['username'];
        require "view/home.php";
    }
    else
        require "view/login.php";


}

/**
 * Function to redirect the user to the produit page
 *  (epending the action received by the index)
 */
function produit(){
    $_GET['action']="produit";
    require "view/produit.php";
}


function logout(){
    $_SESSION=SESSION_destroy();
    home();
}