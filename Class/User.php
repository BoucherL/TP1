<?php
    class User{

        // - Propriétés
        private $_id;
        private $_user;
        private $_passwd;
        private $_admin;
        private $_bdd;

        // - Méthodes
        public function __construct($bdd){
            $this->_bdd = $bdd;
        }

        public function setIdUser($UserID){

        }
       
        //Fonction qui permet de se connecter
        public function Connexion($user,$passwd){
            $requete = $this->_bdd->prepare("SELECT * FROM `user` WHERE `user` = ? AND `passwd`= ?");
            $requete->execute(array($user,$passwd));
            $exist = $requete->rowCount();
            if($exist == 1){
                $donnee = $requete->fetch(); 
                $_SESSION['id'] = $donnee['id'];
                $this->_user = $donnee['user'];
                $this->_passwd = $donnee['passwd'];
                $this->_admin = $donnee['isAdmin'];
                echo '<meta http-equiv="refresh" content="0">';
            }else{
                return "Erreur";
            }  
        }
        //Fonction inscrire et insérer les données dans la bdd
        public function Inscription($user,$passwd){

                // Inscription si les champs ne sont pas vides et si le nom d'utilisateur n'est pas utilisé
                if(!empty($user) AND !empty($passwd)){

                    $exist = $this->_bdd->query("SELECT COUNT(*) FROM user WHERE user ='".$user."'");
                    $exist = $exist->fetch();

                    if ($exist["COUNT(*)"] > 0) {


                    } 
                    else {
                        $insert = $this->_bdd->query("INSERT INTO user(user, passwd) VALUES('".$user."','".$passwd."')");
                        
                        if($insert->rowCount()>=1){
                            echo'Votre compte à été créé, veuillez vous connecter';
                        }
                        else {
                            echo "Une erreur est survenue";
                        }
                    }
                }
                
                else {}

            }
            //Fonction se deconnecter de la session
        public function SeDeconnecter(){
            session_destroy();
            echo '<meta http-equiv="refresh" content="0">';
        }
        //Fonction modifier le mot de passe du user quand il est connecter
        public function modifpassword($user,$passwd){
            
        }
        //Fonction Accés page admin, modifier les users, supprimer users
        public function admin(){
            
        }

}
?>