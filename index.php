<?php  
    session_start();
    include "functions.php";

    $LoginValid = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Formulaire</title>
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->
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
        
        <form action="verification.php" method="POST">
        <b class='LoginValid'><?php echo $LoginValid ?></b>
            <h1>Connexion</h1>
            
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
</body>
</body>

</html>