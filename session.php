<?php
include "Class/User.php";


// - Gestion BDD
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

// - Session
if(!is_null($BDD)){
    echo 'session = "'.$_SESSION["Logged"].'"';
    if ($_SESSION["Logged"] == 1 )){
        $access = true;
        
        $User->setIdUser($_SESSION["ID_User"]);

        header('location: accueil.php');

        }
    }else{
        $access = false;
        // - Si non connecté affiche le formulaire
        $access = $User->AfficheLoginForm();
    }
}else{
    $errorMessage.= "Le site n'a pas accès à la BDD.";
}
?>