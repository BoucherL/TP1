<?php
//connexion à la bdd
try{
    $BDD = new PDO('mysql:host=192.168.64.204; dbname=TP1; charset=utf8','admin', 'admin');
}
catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
    }


// Connexion
function connection($BDD){

    if(isset($_POST['username'])){
       
        $Result = $BDD->query("SELECT * FROM `user` WHERE `user`='".$_POST['username']."' AND `passwd` = '".$_POST['password']."'");
        if($Result->rowCount()>0){
            $tab = $Result->fetch();
            $_SESSION["Logged"] = true;
            $_SESSION["ID_User"] = $tab['id'];
            
            return true;
        }else{

        }
    }

} 

// - Retourne si user connecté ou non
function check() {
    if ($_SESSION["Logged"] !== true) {
      return false;
    }else{
        return true;
    }
}

// - Déconnexion
if(isset($_POST["Disconnect"])){
    $_SESSION["Logged"] = false;
}

// - Suppression du compte
if(isset($_POST["Delete_Account"])){
    $_SESSION["Logged"] = false;
    $Account_Delete = $BDD->query("DELETE FROM `user` WHERE id = '".$_SESSION["ID_User"]."'");
    header("location: index.php");
}