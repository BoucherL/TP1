<?php
    include "Class/User.php";
echo 'coucou';
    // - connexion à la bdd
    try{
        $BDD = new PDO('mysql:host=192.168.64.204; dbname=TP1; charset=utf8', "admin" , "admin" );
    }
    catch(Exception $e){

        echo "J'ai eu un problème erreur :".$e->getMessage();
        }




?>