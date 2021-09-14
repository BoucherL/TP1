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

    if($_SESSION['Logged'] == 0){
        $UserLog->AfficheForm();
    }
    
    if(isset($_POST['Btn1'])){
        $UserLog->Autorisation($_POST['username'], $_POST['password']);
    }
    elseif(isset($_POST['Btn2'])){
        $UserLog->Inscription($_POST['username'], $_POST['password']);
    }


?>