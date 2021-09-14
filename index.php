<?php
    session_start();

    // - check if SESSION['Logged'] exist
    if(!isset($_SESSION['Logged'])){
        $_SESSION['Logged'] = 0 ;
    }


        if(isset($_POST['Btn1'])){
            $UserLog->Autorisation($_POST['username'], $_POST['password']);
            }
            elseif(isset($_POST['Btn2']))
            {
            $UserLog->Inscription($_POST['username'], $_POST['password']);
            }

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
        <?php
            include "session.php";
        ?>
    </body>
</html>