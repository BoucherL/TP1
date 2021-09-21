<?php
include "session.php";
include "Class/User.php";

    $User = new User($BDD);

    if (isset($_SESSION['id'])){
        header("Location: compte.php");
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
        
        ?>

        <form action="" method="POST">

            <h3>Se connecter / S'inscrire</h3>
            <!--<b class='ErrorValid'><?php //echo $ErrorValid ?></b>-->

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" class='submit' name="Btn1" value='Login'>
            <input type="submit" class='submit' name="Btn2" value='Register'>
        </form>
    <?php if(isset($_POST['Btn1'])){
        $user = strip_tags($_POST['username']);
        $passwd = strip_tags($_POST['password']);
        $User->Connexion($user,$passwd);
    }else{
        echo "<p>&nbsp;</p>";
    }
    if(isset($_POST['Btn2'])){
        $User->Inscription($user, $passwd);
    }
            
        ?>
    </body>
</html>