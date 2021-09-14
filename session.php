<?php
    include "Class/User.php";

    // - gestion de la BDD
    $mabase = null;
    $access = null;
    $errorMessage="";

    // - connexion à la bdd
    $user = "admin";
    $passwd = "admin";
    try{
        $BDD = new PDO('mysql:host=192.168.64.204; dbname=TP1; charset=utf8', .$user. , .$passwd. );
    }
    catch(Exception $e){

        echo "J'ai eu un problème erreur :".$e->getMessage();
        }

echo 'coucou';


?>