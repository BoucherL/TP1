<?php
    session_start();

    // - check if SESSION['Logged'] exist
    if(!isset($_SESSION['Logged'])){
        $_SESSION['Logged'] = 0 ;
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


            $formulaire = new User();
            $formulaire->AfficheForm();

        ?>
    </body>
</html>