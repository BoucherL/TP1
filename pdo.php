<?php
try{
    $bdd = new PDO('mysql:host=192.168.64.204;dbname=TP1', 'root', 'root');
}
catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
    }
?>