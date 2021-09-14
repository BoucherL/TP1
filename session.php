<?php

include "Class/User.php";

echo "coucou";

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


?>