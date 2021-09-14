<?php

    // - Gestion de la bdd
    $BDD = null;
    $access = null;
    $errorMessage="";

    try{
        $user = "admin";
        $pass = "admin";
        $mabase = new PDO('mysql:host=192.168.64.204;dbname=TP1', $user, $pass);
    }catch(Exception $e){
        $errorMessage .= $e->getMessage();
    }

//$UserLog = new User($BDD); 

    // - Session
    if(!is_null($BDD)){
        if (isset($_SESSION["Logged"]) && $_SESSION["Logged"]===true){
            $access = true;
            if(isset($_SESSION["UserID"])){
                $User->setIdUser($_SESSION["UserID"]);
            }
        }else{
            $access = false;
            // - Si non connecté affiche formulaire de connexion
            $access = $Joueur1->Connexion();
        }
    }else{
        $errorMessage.= "Le site n'a pas accès à la BDD.";
    }
?>