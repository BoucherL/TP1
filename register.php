<?php
session_start();
include "functions.php";

$RegisterValid = "";

// - Add Inscription Form

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <title>Inscription</title>
</head>

<body>
    <div style="text-align: center">

        <h2>Inscription</h2>

        <!-- formulaire d'inscription-->

        <form action="index.php" method="post">

            <h1>Inscription</h1>
            <b class='RegisterValid'><?php echo $RegisterValid ?></b>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" class='submit' value='Register' >
            <p> Pas de compte ? <a href="register.php">Inscrivez-vous</a></p>
        </form>

    </div>
</body>

</html>


