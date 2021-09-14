<?php
    include "Class/User.php";

    // - Gestion de la bdd
    $BDD = null;
    $access = null;
    $errorMessage="";

    try{
        $user = "admin";
        $pass = "admin";
        $BDD = new PDO('mysql:host=192.168.64.204;dbname=TP1', $user, $pass);
    }catch(Exception $e){
        $errorMessage .= $e->getMessage();
    }

    $UserLog = new User($BDD);

    // - check SESSION['Logged']

    if(!isset(echo $_SESSION['Logged'])){
        $_SESSION['Logged'] = 0 ;
        $UserLog->AfficheLoginForm();
    }
    else if($_SESSION['Logged'] == 0){
        $UserLog->AfficheLoginForm();
    }
?>