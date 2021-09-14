<?php

include "Class/User.php";

// - Gestion BDD
$errorMessage="";

try{
    $user = "admin";
    $pass = "admin";
    $BDD = new PDO('mysql:host=192.168.64.204;dbname=TP1', $user, $pass);
}catch(Exception $e){
    $errorMessage .= $e->getMessage();
}

echo "coucou";

$UserLog = new User($BDD); 


?>