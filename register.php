<?php
session_start();
include "functions.php";

$ValueValid = "";

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

        <form method="POST" action="">

            <table>
                <tr>
                    <td>
                        <label for="pseudo"> Pseudo : </label>
                        <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; }?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mdp"> Mot de passe : </label>
                        <input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp"  value="<?php if(isset($mdp)) { echo $mdp; }?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="S'inscrire">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>