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

    $UserLog = new User();

    if(isset($_POST['submit'])){
        $UserLog->Autorisation($_POST["username"], $_POST["password"]);
    }

    if($_SESSION['Logged'] == 0){
        $UserLog->AfficheForm();
    }
?>