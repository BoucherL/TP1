<?php
    session_start();

    include "function.php";

    if(isset($_POST['formConnect']))
    {
        $mailConnect = htmlspecialchars($_POST['mailConnect']);

        if(!empty($mailConnect) AND !empty($mdpConnect))
        {
            $reqUser = $bdd->prepare("SELECT * FROM espace_membre WHERE mail = ? AND mdp = ?");
            $reqUser->execute(array($mailConnect, $mdpConnect));
            $userExist = $reqUser->rowCount();

            if($userExist == 1)
            {
                $infoUser = $reqUser->fetch();
                $_SESSION['id'] = $infoUser['id'];
                $_SESSION['pseudo'] = $infoUser['pseudo'];
                $_SESSION['mail'] = $infoUser['mail'];
                header("Location: profil.php?id=".$_SESSION['id']);
            } else
            {
                $erreur = "Le mail ou le mot de passe est incorrect.";
            }
        } else
        {
            $erreur = "Tous les champs doivent être complétés.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>

<body>
    <div align="center">

        <h2>Connexion</h2>

        <!-- formulaire d'inscription-->

        <form method="POST" action="">
            <input type="email" name="mailConnect" placeholder="Mail">
            <input type="password" name="mdpConnect" placeholder="Mot de pase">
            <input type="submit" name="formConnect" placeholder="Se connecter">
        </form>

        <?php
            if(isset($erreur))
            {
                echo '<strong><font color="red">'.$erreur.'</font></strong>';
            }
        ?>

    </div>
</body>
