<?php
//connexion à la bdd
try{
    $BDD = new PDO('mysql:host=192.168.64.204; dbname=TP1; charset=utf8','admin', 'admin');
}
catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
    }



function check() {
    if ($_SESSION["Logged"] !== true) {
      return false;
    }else{
        return true;
    }
}

// Connexion
function connection($BDD){

    if(isset($_POST['user'])){
       
        $Result = $BDD->query("SELECT * FROM `user` WHERE `user`='".$_POST['user']."' AND `passwd` = '".$_POST['passwd']."'");
        if($Result->rowCount()>0){
            $tab = $Result->fetch();
            $_SESSION["Logged"] = true;
            $_SESSION["ID_User"] = $tab['id'];
            $_SESSION["IsAdmin"] = $tab['IsAdmin'];
            header("Location: index.php");
            
            return true;
        }else{

        }
    }

} 

//Déconnexion
if(isset($_POST["Disconnect"])){
    $_SESSION["Logged"] = false;
}


?>