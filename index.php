<?php
session_start();
include "functions.php";

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
        if(connection($BDD)){
            if(check()){
                include "menu.php";
            }
            else{
                connection($BDD);
            }
        }
    }

    catch(Exception $e){
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
?>

    <div class="container">

        <form action="verification.php" method="post">

            <h1>Connexion</h1>
            <b class='LoginValid'><?php echo $LoginValid ?></b>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN' >

            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            ?>
        </form>
    </div>

    </div>
   
  

    <div class="Footer">Copyright 2020 - 2030</div>
    
</body>
</html>