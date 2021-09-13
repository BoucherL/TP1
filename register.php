<?php
session_start();
include "functions.php";

$ValueValid = "";
try{
    if (isset($_POST["submit"])) {

        // Inscription si les champs ne sont pas vides et si le nom d'utilisateur n'est pas utilisé
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

            $exist = $BDD->query("SELECT COUNT(*) FROM user WHERE user ='".$_POST['pseudo']."'");
            $exist = $exist->fetch();

            if ($exist["COUNT(*)"] > 0) {
                $ValueValid = "Ce nom d'utilisateur est déja utilisé";
            } 
            else {
                $insert = $BDD->query("INSERT INTO user(user, passwq) VALUES('".$_POST['pseudo']."','".$_POST['mdp']."')");
                
                if($insert->rowCount()>=1){
                    header("Location: ship.php");
                }
                else {
                    echo "Une erreur est survenue";
                }
            }
        }
        
        else {
                $ValueValid = 'Veuillez compléter tout les champs...';
            }

    }
}
catch(Exception $e){
    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                        <input type="submit" name="inscription" value="S'inscrire">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>