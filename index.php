<?php
session_start();
include "functions.php";
include "session.php";

if(check()){
    header('location: accueil.php');
}

$LoginValid = "";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>

  <div class="Contenu">

  <?php 
  try{
        if(Autorisation($login, $passwd)){
            if(check()){
                header('location: accueil.php');
            }
            else{
                Autorisation($login, $passwd);
            }
        }
        else{}
    }

    catch(Exception $e){
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
?>

    <div class="container">



    </div>

    </div>
    
</body>
</html>