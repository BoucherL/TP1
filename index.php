<?php
    session_start();
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
            //if($access != true){
            //    $access = $UserLog->SeDeconnecter();
            //}
        ?>
    </body>
</html>