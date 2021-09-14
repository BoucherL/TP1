<?php
    class User{

        //Propriétés
        private $_user;
        private $_passwd;
        private $_admin;
        private $_bdd;

        //Méthodes
        function __construct($bdd){

            $this->_bdd = $bdd;
        }

        /*public function setIdUser($UserID){
            $Result = $this->_bdd->query("SELECT * FROM `user` WHERE `user`='".$UserID."' ");
            if($tab = $Result->fetch()){ 
                $this->_user = $tab['user']);
                $this->_passwd = $tab['passwd']);
                $this->_admin = $tab['IsAdmin']);
            }
        }*/

        public function AfficheLoginForm(){
            echo "coucou";
        }

        public function Connexion(){

        }

        public function Inscription($user,$passwd){

        }

        public function SeDeconnecter(){

            // - Affiche formulaire
            $Afficheform = true;
            $access = true;

            if( isset($_POST["logout"])){
                // - Si déconnecté affiche formulaire de connexion
                $_SESSION["Logged"] = false;
                session_unset();
                session_destroy();

                $this->Connexion();
                $AfficheForm = false;
                $access = false;
            }else{
                $AfficheForm = true;
            }
    
            if($AfficheForm){
            ?>
                <form action="" method="post" >
                    <div >
                        <input type="submit" value="Déconnexion" name="logout">
                    </div>
                </form>
            <?php
            }
            return $access;
        }

        public function modifpassword($user,$passwd){
            
        }
        public function admin(){

        }

}
?>